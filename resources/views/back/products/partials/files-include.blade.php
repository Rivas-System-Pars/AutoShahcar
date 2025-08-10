@if ($price->file)
    <div class="row single-file">
        <div class="col-12">
            <div class="row" >
                @foreach ($attributeGroups as $attributeGroup)
                    <div class="col-md-3 col-12">
                        <div class="form-group">
                            <label>{{ $attributeGroup->name }}</label>
                            <select class="form-control price-attribute-select" name="prices[{{ $loop->parent->iteration }}][attributes][]">
                                <option value="">انتخاب کنید</option>
                                @foreach ($attributeGroup->get_attributes as $attribute)
                                    <option value="{{ $attribute->id }}" {{ $price->get_attributes()->find($attribute->id) ? 'selected' : '' }}>{{ $attribute->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-6">
            <fieldset class="form-group">
                <label>انتخاب فایل</label>
                <div class="custom-file">
                    <input id="download_files[{{ $loop->index }}][file]" type="file" name="download_files[{{ $loop->index }}][file]" class="custom-file-input">
                    <label class="custom-file-label" for="download_files[{{ $loop->index }}][file]">{{ $price->file->file }}</label>
                </div>
            </fieldset>
        </div>

        <div class="col-md-6 col-12">
            <div class="form-group" hidden>
                <label>عنوان فایل</label>
                <input type="text" class="form-control" name="download_files[{{ $loop->index }}][title]" value="{{ $price->file->title }}">
            </div>
        </div>



        <div class="col-md-3 col-12">
            <div class="form-group">
                <label>قیمت</label>
                <input type="number" class="form-control amount-input" name="download_files[{{ $loop->index }}][price]" min="0" value="{{ $price->price }}" required>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="form-group">
                <label>تخفیف</label>
                <input type="number" step="any" class="form-control" name="download_files[{{ $loop->index }}][discount]" min="0" max="100" value="{{ $price->discount }}">
            </div>
        </div>

        <div class="col-md-3 col-12">
            <div class="form-group">
                <label>وضعیت</label>
                <select name="download_files[{{ $loop->index }}][status]" class="form-control">
                    <option value="active" {{ $price->file->status == 'active' ? 'selected' : '' }}>فعال</option>
                    <option value="inactive" {{ $price->file->status == 'inactive' ? 'selected' : '' }}>غیر فعال</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 col-12">
            <div class="form-group">
                <label>دانلود</label>
                <a href="{{ $price->downloadLink() }}" class="btn btn-success d-block">دانلود فایل</a>
            </div>
        </div>
        <input type="hidden" name="download_files[{{ $loop->index }}][price_id]" value="{{ $price->id }}">
        <div class="col-md-12">
            <button type="button" class="btn btn-flat-danger waves-effect waves-light remove-file custom-padding">حذف</button>
            <hr>
        </div>
    </div>
@endif
