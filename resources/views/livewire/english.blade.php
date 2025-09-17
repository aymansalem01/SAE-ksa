<div>
    <div class="form-header">
        <h2 style="color: #f15d24;"></h2>
    </div>
    <form action="{{ route('submission') }}" method="POST">
        @csrf
        <!-- Full Name -->
        <div class="mb-4">
            <label for="name" class="form-label">Full name:</label>
            <input type="text" name="name" class="form-control p-3" style="background-color: #111827" id="name"
                wire:model="name" placeholder="Enter your full name...." required value="{{ old('name') }}" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="form-label">Email Address:</label>
            <input type="email" name="email" class="form-control p-3" style="background-color: #111827"
                wire:model="email" id="email" placeholder=" example: xxxx@example.com "
                value="{{ old('email') }}" />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Phone -->
        <div class="mb-4">
            <label for="phone" class="form-label">Phone Number:</label>
            <input type="text" name="phone_number" class="form-control p-3" style="background-color: #111827"
                wire:model="phone_number" id="phone" placeholder="start with 966 " required
                value="{{ old('phone_number') }}" />
            @error('phone_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- City -->
        <div class="mb-4">
            <label for="city" class="form-label">City:</label>
            <select id="city" name="city" class="form-select p-3" style="background-color: #111827"
                wire:model.live="city">
                <option selected disabled>Select your city</option>
                <option value="Jeddah">Jeddah</option>
                <option value="Riyadh">Riyadh</option>
                <option value="other">Other</option>
            </select>

            <!-- Input Field for "Other" City -->
            @if ($city === 'other')
                <input type="text" name="other_city" placeholder="Enter your city" class="form-control p-3 mt-3"
                    style="background-color: #111827" wire:model="otherCity">
            @endif

        </div>
        <!-- category -->
        <div class="mb-4">
            <label for="category" class="form-label">Select your plan: </label>
            <select id="category" name="category" class="form-select p-3" style="background-color: #111827"
                wire:model.live="category">
                <option selected value="">select your plan</option>
                @if (count($categories) == 0)
                    <option>no category found</option>
                @endif
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name_en }} </option>
                @endforeach
                <option value="all_of_them">All of them </option>

            </select>
            @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Course -->
        <div class="mb-4">
            <label for="course" class="form-label">Select your course:</label>
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle p-3 w-100 text-start" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #111827">
                    "you can select more than one course"
                </button>
                <ul class="dropdown-menu w-100 p-2 bg-dark text-white" aria-labelledby="dropdownMenuButton">
                    @if (count($courses) == 0)
                        <li>
                            <div class="text-start">
                                <input class="form-check-input" type="checkbox" value="" id="course1"
                                    wire:model.live="course" checked name="course" />
                                <label class="form-check-label" for="course1">please select the plan</label>
                            </div>
                        </li>
                    @endif
                    @foreach ($courses as $course)
                        <li>
                            <div class="text-end">
                                <input class="form-check-input" type="checkbox" value="{{ $course->name_en }}"
                                    id="course1" wire:model.live="course" name="course[]" />
                                <label class="form-check-label" for="course1">{{ $course->name_en }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            @error('course')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mb-5">
            <label for="hear" class="form-label">Do you hear from the SAE before?</label>
            <select id="hear" name="hear" class="form-select p-3" style="background-color: #111827"
                wire:model.live="hear">
                <option selected value=""> select</option>
                <option value="yes">Yes </option>
                <option value="no"> No, I am interested to know more </option>
            </select>
            @error('hear')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Submit -->
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-custom" style="background-color: #ff6900; border: solid #a0a0a0 0.1px">
            Submit
        </button>
        </div>
    </form>
</div>
