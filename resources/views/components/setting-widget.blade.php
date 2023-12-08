{{-- 
style 1
<div class="col-sm-3">
    <a href="{{route($link)}}" class="card course-box"> 
        <div class="card-body"> 
            <div class="course-widget"> 
                <div class="course-icon"> 
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#{{$icon}}"></use>
                    </svg>
                </div>
                <div> 
                    <h5 class="mb-0">{{$title}}</h5>
                    <span class="f-light">{{$des}}</span>
                </div>
            </div>
        </div>
        <x-anonymous.widget-square-boxes />
    </a>
</div> 
--}}


{{-- style 2 --}}
<div {{$attributes}} class="col-sm-3">
    <a href="{{route($data['link'])}}" class="card course-box"> 
        <div class="card-body"> 
            <div class="course-widget"> 
                <div class="course-icon"> 
                    <svg class="fill-icon">
                        <use href="../assets/svg/icon-sprite.svg#{{$data['icon']}}"></use>
                    </svg>
                </div>
                <div> 
                    <h5 class="mb-0">{{$data['title']}}</h5>
                    <span class="f-light">{{$data['des']}}</span>
                </div>
            </div>
        </div>
        <x-anonymous.widget-square-boxes />
    </a>
</div> 