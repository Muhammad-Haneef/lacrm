    <div class="drawer customizer-contain">
      <div class="tab-content" id="c-pills-tabContent">
        <div class="customizer-header">
          <i class="icofont-close icon-close"></i>
          <h5>{{isset($title) ? $title : 'Panel'}}</h5>
          <p class="mb-0">{{isset($subtitle) ? $subtitle : ''}}</p>
        </div>
        <div class="customizer-body custom-scrollbar">
          {{$slot}}
        </div>
      </div>
    </div>