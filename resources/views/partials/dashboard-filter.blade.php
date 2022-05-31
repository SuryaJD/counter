<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
    <!--begin::Menu wrapper-->
    <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
        <button class="btn btn-light">
            <span class="svg-icon svg-icon-dark svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/keen/releases/2021-04-21-040700/theme/demo1/dist/../src/media/svg/icons/Text/Filter.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <rect x="0" y="0" width="24" height="24"/>
                    <path d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z" fill="#000000"/>
                </g>
            </svg><!--end::Svg Icon--></span>
            {{ __('Filter') }}
        </button>
    </div>
    <!--begin::Menu-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-175px mt-2"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('Today')}} </span>
        </div>
        <!--end::Menu item-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('Yesterday')}} </span>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('Last 7 days')}} </span>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('Last 30 days')}} </span>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('This Week')}} </span>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('This Month')}} </span>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('Last Month')}} </span>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('This Year')}} </span>
        </div>
        <!--end::Menu item-->
{{--
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <span class="menu-link px-5">{{ __ ('Custom')}} </span>
        </div>
        <!--end::Menu item--> --}}

        <!--begin::Menu separator-->
        <div class="separator my-2"></div>
        <!--end::Menu separator-->
        <!--begin::Menu item-->
        <div class="menu-item px-5">
            <div class="menu-content px-5">
                <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                    for="kt_user_menu_dark_mode_toggle">
                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode"
                        id="kt_user_menu_dark_mode_toggle" data-kt-url="../dist/index.html" />
                    <span class="pulse-ring ms-n1"></span>
                    <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                </label>
            </div>
        </div>
        <!--end::Menu item-->
    </div>
    <!--end::Menu-->
    <!--end::Menu wrapper-->
</div>
