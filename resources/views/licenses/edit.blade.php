@extends('layouts/edit-form', [
    'createText' => trans('admin/licenses/form.create') ,
    'updateText' => trans('admin/licenses/form.update'),
    'helpTitle' => trans('admin/licenses/general.about_licenses_title'),
    'helpText' => trans('admin/licenses/general.about_licenses_text'),
    'formAction' => ($item) ? route('licenses.update', ['license' => $item->id]) : route('license.store'),
])

{{-- Page content --}}
@section('inputFields')
@include ('partials.forms.edit.name', ['translated_name' => trans('admin/licenses/form.name')])
@include ('partials.forms.edit.category-select', ['translated_name' => trans('admin/categories/general.category_name'), 'fieldname' => 'category_id', 'required' => 'true', 'category_type' => 'license'])


<!-- Serial-->
@can('viewKeys', $item)
<div class="form-group {{ $errors->has('serial') ? ' has-error' : '' }}">
    <label for="serial" class="col-md-3 control-label">{{ trans('admin/licenses/form.license_key') }}</label>
    <div class="col-md-7{{  (\App\Helpers\Helper::checkIfRequired($item, 'serial')) ? ' required' : '' }}">
        <textarea class="form-control" type="text" name="serial" id="serial">{{ Input::old('serial', $item->serial) }}</textarea>
        {!! $errors->first('serial', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
    </div>
</div>
@endcan

<!-- Seats -->
<div class="form-group {{ $errors->has('seats') ? ' has-error' : '' }}">
    <label for="seats" class="col-md-3 control-label">{{ trans('admin/licenses/form.seats') }}</label>
    <div class="col-md-7 col-sm-12 required">
        <div class="col-md-2" style="padding-left:0px">
            <input class="form-control" type="text" name="seats" id="seats" value="{{ Input::old('seats', $item->seats) }}" />
        </div>
    </div>
    {!! $errors->first('seats', '<div class="col-md-8 col-md-offset-3"><span class="alert-msg"><i class="fa fa-times"></i> :message</span></div>') !!}
</div>

@include ('partials.forms.edit.company-select', ['translated_name' => trans('general.company'), 'fieldname' => 'company_id'])
@include ('partials.forms.edit.manufacturer-select', ['translated_name' => trans('general.manufacturer'), 'fieldname' => 'manufacturer_id', 'required' => 'true'])

<!-- Licensed to name -->
<div class="form-group {{ $errors->has('license_name') ? ' has-error' : '' }}">
    <label for="license_name" class="col-md-3 control-label">{{ trans('admin/licenses/form.to_name') }}</label>
    <div class="col-md-7">
        <input class="form-control" type="text" name="license_name" id="license_name" value="{{ Input::old('license_name', $item->license_name) }}" />
        {!! $errors->first('license_name', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
    </div>
</div>

<!-- Licensed to email -->
<div class="form-group {{ $errors->has('license_email') ? ' has-error' : '' }}">
    <label for="license_email" class="col-md-3 control-label">{{ trans('admin/licenses/form.to_email') }}</label>
    <div class="col-md-7">
        <input class="form-control" type="text" name="license_email" id="license_email" value="{{ Input::old('license_email', $item->license_email) }}" />
        {!! $errors->first('license_email', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
    </div>
</div>

<!-- Reassignable -->
<div class="form-group {{ $errors->has('reassignable') ? ' has-error' : '' }}">
    <label for="reassignable" class="col-md-3 control-label">{{ trans('admin/licenses/form.reassignable') }}</label>
    <div class="col-md-7 input-group">
        {{ Form::Checkbox('reassignable', '1', Input::old('reassignable', $item->id ? $item->reassignable : '1'),array('class' => 'minimal')) }}
        {{ trans('general.yes') }}
    </div>
</div>


@include ('partials.forms.edit.supplier-select', ['translated_name' => trans('general.supplier'), 'fieldname' => 'supplier_id'])
@include ('partials.forms.edit.order_number')
@include ('partials.forms.edit.purchase_cost')
@include ('partials.forms.edit.purchase_date')

<link type="text/css" rel="stylesheet" href="{{asset('assets/persianDatepicker/css/persianDatepicker-default.css')}}" />
<script type="text/javascript" src="{{asset('assets/persianDatepicker/js/jquery-1.10.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/persianDatepicker/js/persianDatepicker.min.js')}}"></script>

<!-- Expiration Date -->
<div class="form-group {{ $errors->has('expiration_date') ? ' has-error' : '' }}">
    <label for="expiration_date" class="col-md-3 control-label">{{ trans('admin/licenses/form.expiration') }}</label>

    <div class="input-group col-md-3">
        {{--<div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">--}}
            {{--<input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="expiration_date" id="expiration_date_persian" value="{{ Input::old('expiration_date', jdate($item->expiration_date)) }}">--}}
            {{--<span class="input-group-addon"><i class="fa fa-calendar"></i></span>--}}
        {{--</div>--}}
        <div class="input-group date" data-date-format="yyyy-mm-dd"  data-autoclose="true">
            <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="expiration_date" id="expiration_date_persian" value="{{ Input::old('expiration_date', jdate($item->expiration_date)) }}">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div>
        {!! $errors->first('expiration_date', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
    </div>

</div>

<script type="text/javascript">
    $("#expiration_date_persian").persianDatepicker({
        months: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"],
        dowTitle: ["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه"],
        shortDowTitle: ["ش", "ی", "د", "س", "چ", "پ", "ج"],
        showGregorianDate: !1,
        persianNumbers: !0,
        formatDate: "YYYY-MM-DD",
        selectedBefore: !1,
        selectedDate: null,
        startDate: null,
        endDate: null,
        prevArrow: '\u25c4',
        nextArrow: '\u25ba',
        theme: 'default',
        alwaysShow: !1,
        selectableYears: null,
        selectableMonths: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
        cellWidth: 25, // by px
        cellHeight: 20, // by px
        fontSize: 13, // by px
        isRTL: !1,
        calendarPosition: {
            x: 0,
            y: 0,
        },
        onShow: function () { },
        onHide: function () { },
        onSelect: function () { },
        onRender: function () { }
    });
</script>

<!-- Termination Date -->
<div class="form-group {{ $errors->has('termination_date') ? ' has-error' : '' }}">
    <label for="termination_date" class="col-md-3 control-label">{{ trans('admin/licenses/form.termination_date') }}</label>

    <div class="input-group col-md-3">
        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">
            <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="termination_date" id="termination_date" value="{{ Input::old('termination_date', $item->termination_date) }}">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
        </div>
        {!! $errors->first('termination_date', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
    </div>
</div>

{{-- @TODO How does this differ from Order #? --}}
<!-- Purchase Order -->
<div class="form-group {{ $errors->has('purchase_order') ? ' has-error' : '' }}">
    <label for="purchase_order" class="col-md-3 control-label">{{ trans('admin/licenses/form.purchase_order') }}</label>
    <div class="col-md-3">
        <input class="form-control" type="text" name="purchase_order" id="purchase_order" value="{{ Input::old('purchase_order', $item->purchase_order) }}" />
        {!! $errors->first('purchase_order', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
    </div>
</div>

@include ('partials.forms.edit.depreciation')

<!-- Maintained -->
<div class="form-group {{ $errors->has('maintained') ? ' has-error' : '' }}">
    <label for="maintained" class="col-md-3 control-label">{{ trans('admin/licenses/form.maintained') }}</label>
    <div class="checkbox col-md-7">
        {{ Form::Checkbox('maintained', '1', Input::old('maintained', $item->maintained),array('class' => 'minimal')) }}
        {{ trans('general.yes') }}
    </div>
</div>

@include ('partials.forms.edit.notes')

@stop
