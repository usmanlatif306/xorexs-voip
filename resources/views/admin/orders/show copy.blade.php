<div class="modal fade" id="showModel{{ $subscription->id }}" tabindex="-1" aria-labelledby="showModelLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModelLabel">Subscription</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="fs-14 semibold">
                    <span class="">Subscription#: &nbsp;&nbsp;</span>
                    <span>{{ $subscription->id }} </span>
                </div>
                {{-- user information --}}
                <div class="py-2">
                    <span class="semibold fs-18 text-blue">User Information</span>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-2 col-sm-6">
                        <span class="semibold">Name:</span>
                    </div>
                    <div class="col-md-10 col-sm-6">
                        <span>{{ $subscription->user->name }}</span>
                    </div>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-2 col-sm-6">
                        <span class="semibold">Email:</span>
                    </div>
                    <div class="col-md-10 col-sm-6">
                        <span>{{ $subscription->user->email }}</span>
                    </div>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-2 col-sm-6">
                        <span class="semibold">Phone:</span>
                    </div>
                    <div class="col-md-10 col-sm-6">
                        <span>{{ $subscription->user->phone }}</span>
                    </div>
                </div>
                {{-- Package information --}}
                <div class="py-2">
                    <span class="semibold fs-18 text-blue">Package Information</span>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-3 col-sm-6">
                        <span class="semibold">Name:</span>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        <span>{{ $subscription->package->name }}</span>
                    </div>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-3 col-sm-6">
                        <span class="semibold">Lines:</span>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        <span>{{ $subscription->package->lines }}</span>
                    </div>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-3 col-sm-6">
                        <span class="semibold">Minutes:</span>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        <span>{{ $subscription->package->minutes }}</span>
                    </div>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-3 col-sm-6">
                        <span class="semibold">Billing period:</span>
                    </div>
                    <div class="col-md-9 col-sm-6">
                        <span class="text-capitalize">{{ $subscription->package->period }}</span>
                    </div>
                </div>
                {{-- Subscription information --}}
                <div class="py-2">
                    <span class="semibold fs-18 text-blue">Subscription Information</span>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-4 col-sm-6">
                        <span class="semibold">Remaining DIDs:</span>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <span>{{ $subscription->remaining_dids }}</span>
                    </div>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-4 col-sm-6">
                        <span class="semibold">Remaining Minutes:</span>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <span>{{ $subscription->remaining_minutes }}</span>
                    </div>
                </div>
                <div class="mb-2 fs-14 row">
                    <div class="col-md-4 col-sm-6">
                        <span class="semibold">Ending at:</span>
                    </div>
                    <div class="col-md-8 col-sm-6">
                        <span>{{ $subscription->ends_at?->format('d/m/Y H:i A') }}</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
