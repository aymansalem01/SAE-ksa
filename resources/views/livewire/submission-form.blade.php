<div>
    <div class="form-header">
        <h2 style="color: #f15d24;">سجل التخصص المهتم به</h2>
    </div>
    <form action="{{ route('submission') }}" method="POST">
        @csrf
        <!-- Full Name -->
        <div class="mb-4">
            <label for="name" class="form-label">الاسم الكامل:</label>
            <input type="text" name="name" class="form-control p-3" style="background-color: #111827" id="name"
                wire:model="name" placeholder="ادخل الاسم الكامل" required value="{{ old('name') }}" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="form-label">البريد الالكتروني:</label>
            <input type="email" name="email" class="form-control p-3" style="background-color: #111827"
                wire:model="email" id="email" placeholder="مثال : xxxx@example.com" value="{{ old('email') }}" />
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Phone -->
        <div class="mb-4">
            <label for="phone" class="form-label">رقم الهاتف:</label>
            <input type="text" name="phone_number" class="form-control p-3" style="background-color: #111827"
                wire:model="phone_number" id="phone" placeholder=" ادخل رقم الهاتف ابدأ ب 966" required
                value="{{ old('phone_number') }}" />
            @error('phone_number')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- City -->
        <div class="mb-4">
            <label for="city" class="form-label">المدينة:</label>
            <select id="city" name="city" class="form-select p-3" style="background-color: #111827"
                wire:model.live="city">
                <option selected disabled>اختر المدينة</option>
                <option value="Jeddah">جدة</option>
                <option value="Riyadh">الرياض</option>
                <option value="other">اخرى</option>
            </select>
            @if ($city === 'other')
                <input type="text" name="other_city" placeholder="المدينة" class="form-control p-3 mt-3"
                    style="background-color: #111827" wire:model="otherCity">
            @endif
        </div>
        <!-- category -->
        <div class="mb-4">
            <label for="category" class="form-label">اختر الخطة:</label>
            <select id="category" name="category" class="form-select p-3" style="background-color: #111827"
                wire:model.live="category">
                <option selected value="">اختر الخطة المهتم بها</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }} </option>
                @endforeach
                <option value="all_of_them">جملع الخطط</option>
            </select>
            @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Course -->
        <div class="mb-4">
            <label for="course" class="form-label">التخصص المهتم به:</label>
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle p-3 w-100 text-end" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #111827">
                    "يمكنك اختيار اكثر من خطة"
                </button>
                <ul class="dropdown-menu w-100 p-2 bg-dark text-white" aria-labelledby="dropdownMenuButton">
                    @if (count($courses) == 0)
                        <li>
                            <div class="text-end">
                                {{-- <input class="form-check-input" type="checkbox" value="" id="course1" wire:model.live="course"
                                    name="course" /> --}}
                                <label class="form-check-label" for="course1">الرجاء اختيار الخطة</label>
                            </div>
                        </li>
                    @endif
                    @foreach ($courses as $course)
                        <li>
                            <div class="text-end">
                                <input class="form-check-input" type="checkbox" value="{{ $course->name }}"
                                    id="course1" wire:model.live="course" name="course[]" />
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
        <div class="mb-5">
            <label for="hear" class="form-label">هل سمعت من قبل عن الكلية الاسترالية للاعلام؟</label>
            <select id="hear" name="hear" class="form-select p-3" style="background-color: #111827"
                wire:model.live="hear">
                <option selected value=""> هل سمعت من قبل </option>
                <option value="yes">نعم </option>
                <option value="no"> لا, مهتم لمعرفة المزيد </option>
            </select>
            @error('hear')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <!-- Submit -->
        <button type="submit" class="btn btn-custom" style="background-color: #111827; border: solid #a0a0a0 0.1px">
            إرسال
        </button>
    </form>
</div>
