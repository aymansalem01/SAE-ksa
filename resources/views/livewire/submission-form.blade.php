<div>
    <div class="form-header">
        <h2 style="color: #f15d24;">سجل ألتخصص المهتم به</h2>
    </div>
    <form action="{{ route('submission') }}" method="POST">
        @csrf
        <!-- Full Name -->
        <div class="mb-4">
            <label for="name" class="form-label">ألاسم الكامل:</label>
            <input type="text" name="name" class="form-control p-3" style="background-color: #111827" id="name"
                wire:model="name" placeholder="أدخل الاسم الكامل" required value="{{ old('name') }}" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="form-label">ألبريد ألالكتروني:</label>
            <input type="email" name="email" class="form-control p-3" style="background-color: #111827"
                wire:model="email" id="email" placeholder="أدخل البريد ألالكتروني" value="{{ old('email') }}" />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Phone -->
        <div class="mb-4">
            <label for="phone" class="form-label">رقم ألهاتف:</label>
            <input type="text" name="phone_number" class="form-control p-3" style="background-color: #111827"
                wire:model="phone_number" id="phone" placeholder="ادخل رقم الهاتف" required
                value="{{ old('phone_number') }}" />
            @error('phone_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- City -->
        <div class="mb-4">
            <label for="city" class="form-label">ألمدينة:</label>
            <select id="city" name="city" class="form-select p-3" style="background-color: #111827"
                wire:model="city">
                <option selected disabled>أختر ألمدينة</option>
                <option value="Jeddah">جدة</option>
                <option value="Riyadh">الرياض</option>
            </select>
            @error('city')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- category -->
        <div class="mb-4">
            <label for="category" class="form-label">أختر ألخطة:</label>
            <select id="category" name="category" class="form-select p-3" style="background-color: #111827"
                wire:model.live="category">
                <option selected>أختر الخطة ألمهتم بها</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }} </option>
                @endforeach
            </select>
            @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Course -->
        <div class="mb-5">
            <label for="course" class="form-label">ألتخصص المهتم به:</label>
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle p-3 w-100 text-end" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #111827">
                    أختر ألتخصص
                </button>
                <ul class="dropdown-menu w-100 p-2 bg-dark text-white" aria-labelledby="dropdownMenuButton">
                    @if (count($courses) == 0)
                        <li>
                            <div class="text-end">
                                {{-- <input class="form-check-input" type="checkbox" value="" id="course1" wire:model.live="course"
                                    name="course" /> --}}
                                <label class="form-check-label" for="course1">لا يوجد تخصصات</label>
                            </div>
                        </li>
                    @endif
                    @foreach ($courses as $course)
                        <li>
                            <div class="text-end">
                                <input class="form-check-input" type="checkbox" value="{{ $course->name }}" id="course1" wire:model.live="course"
                                    name="course[]" />
                                <label class="form-check-label" for="course1">{{ $course->name }}</label>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            @error('course')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Submit -->
        <button type="submit" class="btn btn-custom" style="background-color: #111827; border: solid #a0a0a0 0.1px">
            إرسال
        </button>
    </form>
</div>
