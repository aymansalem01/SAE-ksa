    <div class="contact-area ptb-100">
        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="contact-form col-8">
                    <form id="contactForm" action="{{ route('submission') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">First Name <span style="color: red;">*</span></label>
                                    <input type="text" name="first_name" class="form-control" id="name"
                                        wire:model="first_name" required data-error="Please enter your name"
                                        placeholder="First Name">
                                    @error('first_name')
                                        <div class="help-block with-errors">
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Last Name <span style="color: red;">*</span></label>
                                    <input type="text" name="last_name" class="form-control" id="name2"
                                        wire:model="last_name" required data-error="Please enter your name"
                                        placeholder=" last name ">
                                    @error('last_name')
                                        <div class="help-block with-errors">
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Email </label>
                                    <input type="email" name="email" class="form-control" id="email"
                                        wire:model="email" required data-error="Please enter your email"
                                        placeholder="exampl@example.com">
                                    @error('email')
                                        <div class="help-block with-errors">
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name">Phone <span style="color: red;">*</span></label>
                                    <input type="text" name="phone_number" class="form-control" id="phone_number"
                                        wire:model="phone_number" required data-error="Please enter your phone number"
                                        placeholder="966xxxxxxx">
                                    @error('phone_number')
                                        <div class="help-block with-errors">
                                            <span class="text-danger">{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group col-6 ">
                                <label for="name">Study plan</label>
                                <select class="form-select" aria-label="Default select example" name="category"
                                    wire:model.live="category">
                                    <option value="" selected>Select study plan</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name_en }} </option>
                                    @endforeach
                                    <option value="all_of_them">all of them</option>
                                </select>
                            </div>
                            <div class="form-group col-6">
                                <label for="course">Select Your Course</label>
                                <div class="dropdown">
                                    <button class="form-select text-start" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false"
                                        style="background-color: #fff;">
                                        <span id="selectedText">Select courses...</span>
                                    </button>
                                    <ul class="dropdown-menu w-100 p-2" aria-labelledby="dropdownMenuButton" wire:ignore.self
                                        style="max-height: 200px; overflow-y: auto;">
                                        @foreach ($courses as $course)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="course[]"
                                                        value="{{ $course->name_en }}" id="course{{ $loop->index }}"
                                                        wire:model.live="course">
                                                    <label class="form-check-label" for="course{{ $loop->index }}">
                                                        {{ $course->name_en }}
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                        @if (count($courses) == 0)
                                            <li>
                                                <div class="text-start">
                                                    <label class="form-check-label" for="course1"> Please select
                                                        study plan
                                                        </label>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Select Your City </label>
                                    <select class="form-select" name="city" aria-label="Default select example"
                                        wire:model.live="city">
                                        <option selected>Select your city</option>
                                        <option value="Jeddah">Jeddah</option>
                                        <option value="Riyadh">Riyadh </option>
                                        <option value="Dammam">Dammam </option>
                                        <option value="other">other</option>
                                    </select>
                                </div>
                            </div>
                            @if ($city === 'other')
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" name="other_city" placeholder="Enter your city"
                                            class="form-control " style="background-color: #111827"
                                            wire:model="otherCity">
                                    </div>
                                </div>
                            @endif
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="name">Any comment</label>
                                    <textarea name="message" id="message" class="form-control" cols="30" rows="6" 
                                        data-error="Please enter your message" placeholder=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <button type="submit" class="default-btn">Submit Now</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
