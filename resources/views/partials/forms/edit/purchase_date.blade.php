<link type="text/css" rel="stylesheet" href="{{asset('assets/persianDatepicker/css/persianDatepicker-default.css')}}" />
<script type="text/javascript" src="{{asset('assets/persianDatepicker/js/jquery-1.10.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/persianDatepicker/js/persianDatepicker.min.js')}}"></script>

<!-- Purchase Date -->
<div class="form-group {{ $errors->has('purchase_date') ? ' has-error' : '' }}">
   <label for="purchase_date" class="col-md-3 control-label">{{ trans('general.purchase_date') }}</label>
   <div class="input-group col-md-3">
        {{--<div class="input-group date" data-provide="datepicker" data-date-format="yyyy-mm-dd"  data-autoclose="true">--}}
        <div class="input-group date" data-date-format="yyyy-mm-dd"  data-autoclose="true">
{{--            <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="purchase_date" id="purchase_date_persian" value="{{ Input::old('purchase_date', ($item->purchase_date) ? $item->purchase_date->format('Y-m-d') : '') }}">--}}
            <input type="text" class="form-control" placeholder="{{ trans('general.select_date') }}" name="purchase_date" id="purchase_date_persian" value="{{ Input::old('purchase_date', ($item->purchase_date) ? jdate($item->purchase_date) : '') }}">
            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
       </div>
       {!! $errors->first('purchase_date', '<span class="alert-msg"><i class="fa fa-times"></i> :message</span>') !!}
   </div>
</div>


<script type="text/javascript">
    $("#purchase_date_persian").persianDatepicker({
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
