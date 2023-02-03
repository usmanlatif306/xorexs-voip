<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Notifications\TestEmailNotification;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Notification;

class SettingController extends Controller
{
    /**
     * Display a website content page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($type)
    {
        $data = (new SettingService())->$type();

        return view('admin.settings.index', compact('data', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // updating record in db
        foreach ($request->only(['app_name', 'currency_code', 'currency_sign', 'app_url', 'show_app_name_in_title', 'title_separator'])  as $key => $value) {
            Setting::updateOrCreate([
                'key' => $key
            ], [
                'value' => $value ?? ''
            ]);
        }

        // updating record in .env file
        $data = $request->except('_token');
        $app_url = substr($data['app_url'], -1) === '/' ? $data['app_url'] : $data['app_url'] . '/';
        $this->update_env([
            'APP_NAME' => $data['app_name'],
            'APP_URL' => $app_url,
            'APP_ENV' => $data['app_environment'],
            'APP_DEBUG' => $data['app_debug'],
        ]);

        return redirect()->back()->with('success', 'Setting has been updated!');
    }

    /**
     * get the env file fields.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function env(Request $request)
    {
        $data = $request->except('_token');

        $this->update_env($data);


        return redirect()->back()->with('success', 'Setting has been updated!');
    }

    /**
     * sending test email.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function email(Request $request)
    {
        Notification::route('mail', $request->email)
            ->notify(new TestEmailNotification());


        return redirect()->back()->with('success', 'Email configured successfully!');
    }

    /**
     * update env files
     *
     * @param  array $data
     */
    private function update_env($data): void
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            foreach ($data as $key => $value) {
                file_put_contents($path, str_replace(
                    $key . '=' . "'" . env($key) . "'",
                    $key . '=' . "'" . $value . "'",
                    file_get_contents($path)
                ));
            }
        }

        Artisan::call("cache:clear");
        Artisan::call("config:clear");
    }
}
