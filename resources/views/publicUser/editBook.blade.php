<style>
    .navbar  {
        background-color: #14141F;
    }
</style>
@include('publicUser.navbar')
<br>
<br>
<br>
<br>

<!-- Booking Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container col-md-9 ">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                {{-- <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase">Edit Booking</h6>
                    <h1 class="text-white mb-4">Online Booking</h1>
                    <p class="mb-4">Reconnect with yourself and take time away from your hectic life.

                        Book one of our special offers  today and take a tour you will remember forever!

                         </p>
                    <p class="mb-4">We have the perfect destinations to book your next holiday or get-away. From well-being to sports, adventures, sun, sea and  holiday breaks,Check out some of our latest special offers:</p>
                    <a class="btn btn-outline-light py-3 px-5 mt-2" href="{{route('user.about')}}">Read More</a>
                </div> --}}
                <div class=" ">
                    <h1 class="text-white mb-4"> Edit Your Reservation</h1>
                    <form action="{{route('user.book.update',$reservation[0]->id)}}" method="POST">
                        @method('GET')
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="First Name" name="first_name" value="{{ $reservation[0]->first_name}}" class="@error('first_name') is-invalid @enderror">
                                    <input type="hidden" class="form-control bg-transparent" id="name" placeholder="First Name" name="user_id" value="{{ Auth::user()->id }}">
                                    <label for="name">First Name</label>
                                    @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Last Name" name="last_name" value="{{ $reservation[0]->last_name}}" class="@error('last_name') is-invalid @enderror">
                                    <label for="name">Last Name</label>
                                    @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control bg-transparent" id="name" placeholder="Phone Number" name="phoneNumber" value="{{ $reservation[0]->phoneNumber}}" value="{{ old('phoneNumber')}}" class="@error('phoneNumber') is-invalid @enderror">
                                    <label for="name">Phone Number</label>
                                    @error('phoneNumber')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            @if($trip[0]->guest_number==1)
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="number" class="form-control bg-transparent" id="name" value="{{ $reservation[0]->number_of_guest}}" placeholder="Guest Number" min="1"  name="guest_number">
                                    <label for="name">Number of guest</label>
                                </div>
                            </div>
                            @endif
                            @if($trip[0]->guest_number!=1)
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="hidden" class="form-control bg-transparent" id="name"  min="1" value="{{$reservation[0]->guest_number}}" name="guest_number" value="{{ old('guest_number')}}">
                                </div>
                            </div>
                            @endif

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email" name="email" value="{{$reservation[0]->email}}" class="@error('email') is-invalid @enderror">
                                    <label for="email">Your Email</label>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating date" id="date3" data-target-input="nearest">
                                    <input type="date"  class="form-control bg-transparent datetimepicker-input" id="date_picker"  placeholder="Date" value="{{$reservation[0]->res_date}}" data-target="#date3" data-toggle="datetimepicker" name="res_date"  class="@error('res_date') is-invalid @enderror" />
                                    <label for="datetime">Date</label>
                                    @error('res_date')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                   @enderror
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="form-floating">
                                    <select class="form-select bg-transparent" id="select1">
                                        <option value="1">Destination 1</option>
                                        <option value="2">Destination 2</option>
                                        <option value="3">Destination 3</option>
                                    </select>
                                    <label for="select1">Destination</label>
                                </div>
                            </div> --}}
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control bg-transparent" placeholder="Special Request" id="message" style="height: 100px" name="comment" value="{{$reservation[0]->comment}}" ></textarea>
                                    <label for="message">Special Request</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="booking p-5">
            <div class="row g-5 align-items-center">
                <div class="col-md-6 text-white">
                    <h6 class="text-white text-uppercase"></h6>
                    <h1 class="text-white mb-4"></h1>
                    <p class="mb-4"></p>
                    <p class="mb-4"></p>

                </div>
                <div class="col-md-6">
                    <h1 class="text-white mb-4"></h1>


                        </div>

                </div>
            </div>
        </div>
    </div>
</div>



@include('publicUser.footer')
<script language="javascript">
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = yyyy + '-' + mm + '-' + dd;
    $('#date_picker').attr('min',today);

</script>