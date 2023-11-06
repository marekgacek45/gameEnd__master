<div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1" checked>
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        
        <div class="slide first">
            <img src="{{asset('assets\images\slider\slider-1.avif')}}" alt="">
        </div>
        <div class="slide ">
            <img src="{{asset('assets\images\slider\slider-2.avif')}}" alt="">
        </div>
        <div class="slide">
            <img src="{{asset('assets\images\slider\slider-3.avif')}}" alt="">
        </div>
    </div>
    <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
    </div>
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn" checked></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
    </div>
</div>
