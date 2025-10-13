<div class="contact-area ptb-100" dir="rtl">
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="contact-form col-8">
                <form id="contactForm" action="{{ route('submission') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">الاسم الأول <span style="color: red;">*</span></label>
                                <input type="text" name="first_name" class="form-control" id="name"
                                    wire:model="first_name" required data-error="يرجى إدخال الاسم الأول"
                                    placeholder="الاسم الأول">
                                @error('first_name')
                                    <div class="help-block with-errors">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">اسم العائلة <span style="color: red;">*</span></label>
                                <input type="text" name="last_name" class="form-control" id="name2"
                                    wire:model="last_name" required data-error="يرجى إدخال اسم العائلة"
                                    placeholder="اسم العائلة">
                                @error('last_name')
                                    <div class="help-block with-errors">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">البريد الإلكتروني</label>
                                <input type="email" name="email" class="form-control" id="email"
                                    wire:model="email" required data-error="يرجى إدخال البريد الإلكتروني"
                                    placeholder="example@example.com">
                                @error('email')
                                    <div class="help-block with-errors">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">رقم الهاتف <span style="color: red;">*</span></label>
                                <input type="text" name="phone_number" class="form-control" id="phone_number"
                                    wire:model="phone_number" required data-error="يرجى إدخال رقم الهاتف"
                                    placeholder="966xxxxxxx">
                                @error('phone_number')
                                    <div class="help-block with-errors">
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="name">خطة الدراسة</label>
                                <select class="form-select" aria-label="Default select example" name="category"
                                    wire:model.live="category">
                                    <option value="" selected>اختر خطة الدراسة</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                    <option value="all_of_them">الكل</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="form-group">
                                <label for="course">اختر دورتك</label>
                                <div class="dropdown">
                                    <button class="form-select text-end" type="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #fff;">
                                        <span id="selectedText">اختر الدورات...</span>
                                    </button>
                                    <ul class="dropdown-menu w-100 p-2 text-end" aria-labelledby="dropdownMenuButton"
                                        wire:ignore.self style="max-height: 200px; overflow-y: auto;">
                                        @foreach ($courses as $course)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="course[]"
                                                        value="{{ $course->name_en }}" id="course{{ $loop->index }}"
                                                        wire:model.live="course">
                                                    <label class="form-check-label" for="course{{ $loop->index }}">
                                                        {{ $course->name }}
                                                    </label>
                                                </div>
                                            </li>
                                        @endforeach
                                        @if (count($courses) > 0)
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="course[]"
                                                        value="all_of_them" id="course" wire:model.live="course">
                                                    <label class="form-check-label" for="course">
                                                        جميعها، أود الاستكشاف والتعلم أكثر.
                                                    </label>
                                                </div>
                                            </li>
                                        @endif
                                        @if (count($courses) == 0)
                                            <li>
                                                <div class="text-end">
                                                    <label class="form-check-label" for="course1">
                                                        يرجى اختيار خطة الدراسة
                                                    </label>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="name">اختر مدينتك</label>
                                <select class="form-select" name="city" aria-label="Default select example"
                                    wire:model.live="city">
                                    <option selected>اختر مدينتك</option>
                                    <option value="Jeddah">جدة</option>
                                    <option value="Riyadh">الرياض</option>
                                    <option value="Dammam">الدمام</option>
                                    <option value="other">أخرى</option>
                                </select>
                            </div>
                        </div>

                        @if ($city === 'other')
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="other_city" placeholder="أدخل مدينتك"
                                        class="form-control" style="background-color: #111827"
                                        wire:model="otherCity">
                                </div>
                            </div>
                        @endif

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <label for="name">أي ملاحظات</label>
                                <textarea name="message" id="message" class="form-control" cols="30" rows="6"
                                    data-error="يرجى إدخال الرسالة" placeholder=""></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <button type="submit" class="default-btn">إرسال الآن</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
