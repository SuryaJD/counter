<div>
    
    <header class="page-title-bar mt-2">
        <div class="d-flex flex-column flex-md-row">
        <div>     
                <a href="#" class="user-avatar user-avatar-md">
                    <img src="{{ asset('assets/images/dummy/img-5-lg.jpg') }}" alt="">
                </a>
        </div>
        <div class="ml-2 p-1">
            <a href="https://www.wordpress.com" class="h4">wordpress.com</a><i class="fas fa-external-link-alt pl-2 text-muted"></i>
        </div>
          <div class="ml-auto">
            <!-- .dropdown -->
            <div class="dropdown">
              <button class="btn btn-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span>This Week</span> <i class="fa fa-fw fa-caret-down"></i></button> <!-- .dropdown-menu -->
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-md stop-propagation">
                <div class="dropdown-arrow"></div><!-- .custom-control -->
                <div class="custom-control custom-radio">
                  <input type="radio" wire:model="range" class="custom-control-input" id="today" name="dpFilter" value="today"> 
                  <label class="custom-control-label d-flex justify-content-between" for="today">
                    <span> {{ __('Today') }}</span> 
                    <span class="text-muted">{{ \Carbon\Carbon::now()->format('d M') }} </span>
                </label>
                </div><!-- /.custom-control -->
                <!-- .custom-control -->
                <div class="custom-control custom-radio">
                  <input type="radio" wire:model="range" class="custom-control-input" id="yesterday" name="dpFilter" value="yesterday"> 
                    <label class="custom-control-label d-flex justify-content-between" for="yesterday">
                        <span>{{ __('Yesterday') }}</span>
                        <span class="text-muted">Mar 26</span>
                    </label>
                </div><!-- /.custom-control -->
                <!-- .custom-control -->
                <div class="custom-control custom-radio">
                  <input type="radio" wire:model="range" class="custom-control-input" id="this_week" name="dpFilter" value="this_week"> 
                  <label class="custom-control-label d-flex justify-content-between" for="this_week">
                      <span>This Week</span> 
                      <span class="text-muted">Mar 21-27</span>
                    </label>
                </div><!-- /.custom-control -->
                <!-- .custom-control -->
                <div class="custom-control custom-radio">
                  <input type="radio" wire:model="range" class="custom-control-input" id="this_month" name="dpFilter" value="this_month">
                   <label class="custom-control-label d-flex justify-content-between" for="this_month">
                        <span>This Month</span>
                        <span class="text-muted">Mar 1-31</span>
                    </label>
                </div><!-- /.custom-control -->
                <!-- .custom-control -->
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="dpYear" name="dpFilter" data-start="2019/01/01" data-end="2019/12/31"> <label class="custom-control-label d-flex justify-content-between" for="dpYear"><span>This Year</span> <span class="text-muted">2019</span></label>
                </div><!-- /.custom-control -->
                <!-- .custom-control -->
                <div class="custom-control custom-radio">
                  <input type="radio" class="custom-control-input" id="dpCustom" name="dpFilter" data-start="2019/03/27" data-end="2019/03/27"> <label class="custom-control-label" for="dpCustom">Custom</label>
                  <div class="custom-control-hint my-1">
                    <!-- datepicker:range -->
                    <input type="text" class="form-control flatpickr-input" id="dpCustomInput" data-toggle="flatpickr" data-mode="range" data-disable-mobile="true" data-date-format="Y-m-d" readonly="readonly"> <!-- /datepicker:range -->
                  </div>
                </div><!-- /.custom-control -->
              </div><!-- /.dropdown-menu -->
            </div><!-- /.dropdown -->
          </div>
        </div>
    </header>



    <div>
        @livewire('widgets.main',compact(['range','from','to','format','interval']))

        {{-- <livewire:widgets.main/> --}}
    
    </div>

    <div class="card-deck-xl">
        <!-- .card -->
        @livewire('widgets.top-pages')

        @livewire('widgets.top-sources')

    </div>
    
</div>
