<div class="voopo__picing__area bg-image--1 pt--110 pb--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <span>Package</span>
                    <h2>Pick a Pricing Plan</h2>
                </div>
            </div>
        </div>
        <div class="row mt--30">
            @foreach ($packages as $product)
                <!-- Start Single Pricing -->
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="pricing">
                        <div class="content">
                            <span>{{ $product->name }}</span>
                            <div class="price">
                                <p><sup>$</sup> {{ $product->price }} <sub>/month</sub></p>
                            </div>
                            <ul>
                                <li>{{ $product->lines }} Lines</li>
                                <li>{{ $product->minutes }} Minute Calls</li>
                                {{-- <li>2 IP Dedicated</li>
                            <li>Personal Server</li>
                            <li>15 Countries</li> --}}
                            </ul>
                            <div class="price__btn">
                                <button data-plan="{{ $product->id }}" class="voopo__btn btn--light save-plan">Order
                                    Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Pricing -->
            @endforeach

            <!-- Order Success Modal -->
            {{-- <div class="modal fade" id="planSavedModel" tabindex="-1" role="dialog"
                aria-labelledby="planSavedModelLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Select Area Code</h5>
                        </div>
                        <div class="modal-body">
                            <div id="areaErr" class="alert alert-danger d-none" role="alert"></div>
                            <div class="form-group">
                                <label for="area">Select Area Code</label>
                                <select id="city" class="form-control" name="city">
                                    @foreach ($codes as $code)
                                        <option value="{{ $code->id }}">
                                            {{ $code->city }} <small>({{ $code->code }})</small>
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button id="areaCode" class="voopo__btn btn--light">Select</button>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $('.save-plan').on('click', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('order.save') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    package_id: $(this).data('plan')
                },
                success: function(response) {
                    showMessage(response)
                },
                error: function(err) {
                    showMessage({
                        error: true,
                        message: err.responseJSON.message
                    })

                }
            });
        });
        // $('#areaCode').on('click', function(e) {
        //     $('#areaErr').addClass('d-none');
        //     e.preventDefault();
        //     $.ajax({
        //         url: "{{ route('order.city') }}",
        //         type: "POST",
        //         data: {
        //             city: $('#city').val()
        //         },
        //         success: function(response) {
        //             if (!response.error) {
        //                 window.location.href = "{{ route('register') }}";
        //             } else {
        //                 $('#areaErr').removeClass('d-none').text(response.message);
        //             }
        //         },
        //         error: function(error) {
        //             $('#areaErr').removeClass('d-none').text(response.message);
        //         }
        //     });
        // });

        function showMessage(response) {
            if (!response.error) {
                Swal.fire({
                    icon: 'success',
                    title: 'Congratulation!',
                    text: response.message,
                    showCancelButton: true,
                    confirmButtonText: 'Checkout',
                    cancelButtonText: 'Continue Shopping',
                    reverseButtons: true,
                    // focusConfirm: false,
                    // cancelButtonColor: '#d33',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('user.cart') }}";
                    }
                })
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: response.message
                })
            }
        }
    </script>
@endpush
