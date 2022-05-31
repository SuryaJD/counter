@extends('layouts.base')

@section('subheader')
    <!--begin::Title-->
    <div>
        <span class="symbol symbol-50px me-2">
            <span class="symbol-label">
                <img alt="" class="w-25px" src="assets/media/svg/brand-logos/atica.svg">
            </span>
        </span>
        <h3 class="text-white fw-bolder fs-2qx me-5" style="display: inline">Worthcoding.com</h3>
    </div>
    <!--begin::Title-->
    <!--begin::Actions-->
    <div class="d-flex align-items-center flex-wrap py-2">
        <!--begin::Search-->
        <div id="kt_header_search" class="d-flex align-items-center w-200px w-lg-250px my-2 me-4 me-lg-6"
            data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
            data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true"
            data-kt-menu-placement="bottom-end">
            <!--begin::Form-->
            <form data-kt-search-element="form" class="search w-100 position-relative" autocomplete="off">
                <!--begin::Hidden input(Added to disable form autocomplete)-->
                <input type="hidden" />
                <!--end::Hidden input-->
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span
                    class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-white position-absolute top-50 translate-middle-y ms-5">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                            transform="rotate(45 17.0365 15.1223)" fill="black" />
                        <path
                            d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                            fill="black" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Input-->
                <input type="text" class="form-control ps-15" name="search" value="" placeholder="Search..."
                    data-kt-search-element="input" />
                <!--end::Input-->
                <!--begin::Spinner-->
                <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                    data-kt-search-element="spinner">
                    <span class="spinner-border h-15px w-15px align-middle text-white"></span>
                </span>
                <!--end::Spinner-->
                <!--begin::Reset-->
                <span
                    class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                    data-kt-search-element="clear">
                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                    <span class="svg-icon svg-icon-2 svg-icon-white svg-icon-lg-1 me-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                transform="rotate(-45 6 17.3137)" fill="black" />
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
                <!--end::Reset-->
            </form>
            <!--end::Form-->
            <!--begin::Menu-->
            <div data-kt-search-element="content"
                class="menu menu-sub menu-sub-dropdown w-300px w-md-400px py-7 px-7 overflow-hidden">
                <!--begin::Wrapper-->
                <div data-kt-search-element="wrapper">
                    <!--begin::Categories-->
                    <div data-kt-search-element="categories" class="d-flex overflow-auto position-relative"
                        data-kt-buttons="true">
                        <!--begin::Category items-->
                        <a class="btn btn-light-primary active rounded-pill me-1 py-2 px-4"
                            data-kt-search-category="all">All</a>
                        <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                            data-kt-search-category="targets">Targets</a>
                        <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                            data-kt-search-category="projects">Projects</a>
                        <a class="btn btn-light-primary rounded-pill me-1 py-2 px-4"
                            data-kt-search-category="users">Users</a>
                        <!--end::Category items-->
                        <!--begin::Preferences toggle-->
                        <div data-kt-search-element="preferences-show"
                            class="btn btn-icon btn-sm btn-active-color-primary ms-auto">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="black" />
                                    <rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                    <rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                    <rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Preferences toggle-->
                    </div>
                    <!--end::Categories-->
                    <!--begin::Separator-->
                    <div class="separator border-gray-200 my-6"></div>
                    <!--end::Separator-->
                    <!--begin::Recently viewed-->
                    <div data-kt-search-element="results" class="d-none">
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                            <!--begin::Category title-->
                            <h3 class="fs-4 fw-bold m-0 pb-5" data-kt-search-element="category-title">Targets</h3>
                            <!--end::Category title-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="targets">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light">
                                        <img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg"
                                            alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Company Rbranding</span>
                                    <span class="badge badge-light">UI Design</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="targets">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light">
                                        <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Company Re-branding</span>
                                    <span class="badge badge-light">Web Development</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="targets">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light">
                                        <img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Business Analytics App</span>
                                    <span class="badge badge-light">Administration</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="targets">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light">
                                        <img class="w-20px h-20px" src="assets/media/svg/brand-logos/atica.svg" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">5G Mobile Billing</span>
                                    <span class="badge badge-light">Database Design</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="targets">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light">
                                        <img class="w-20px h-20px" src="assets/media/svg/brand-logos/rgb.svg" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">UI/UX Conference</span>
                                    <span class="badge badge-light">Server Setup</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="targets">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light">
                                        <img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">EcoLeaf App Launch</span>
                                    <span class="badge badge-light">Marketing</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="targets">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light">
                                        <img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Tower Group Website</span>
                                    <span class="badge badge-light">Google Adwords</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Category title-->
                            <h3 class="fs-4 fw-bold m-0 pt-10 pb-5" data-kt-search-element="category-title">Projects
                            </h3>
                            <!--end::Category title-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="projects">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                                                    fill="black" />
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
                                    <span class="fs-7 text-muted">#45670</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="projects">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                                    fill="black" />
                                                <path
                                                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">"Create FireStone API" Target</span>
                                    <span class="fs-7 text-muted">#84250</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="projects">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
                                    <span class="fs-7 text-muted">#67945</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="projects">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                    fill="black" />
                                                <path
                                                    d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
                                    <span class="fs-7 text-muted">#24005</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="projects">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                                    fill="black" />
                                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
                                    <span class="fs-7 text-muted">#45690</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="projects">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                    fill="black" />
                                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
                                    <span class="fs-7 text-muted">#21090</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="projects">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                    fill="black" />
                                                <path
                                                    d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
                                    <span class="fs-7 text-muted">#34560</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Category title-->
                            <h3 class="fs-4 fw-bold m-0 pt-10 pb-5" data-kt-search-element="category-title">Users</h3>
                            <!--end::Category title-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="users">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <img src="assets/media/avatars/150-1.jpg" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                    <span class="badge badge-light">Marketing Manager</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="users">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <img src="assets/media/avatars/150-3.jpg" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Olivia Bold</span>
                                    <span class="badge badge-light">Software Engineer</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="users">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <img src="assets/media/avatars/150-4.jpg" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Sean Wild</span>
                                    <span class="badge badge-light">Web Developer</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="users">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <img src="assets/media/avatars/150-6.jpg" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Karina Clark</span>
                                    <span class="badge badge-light">Google Expert</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="users">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <img src="assets/media/avatars/150-8.jpg" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Ana Clark</span>
                                    <span class="badge badge-light">UI/UX Designer</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="users">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <img src="assets/media/avatars/150-11.jpg" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Nick Pitola</span>
                                    <span class="badge badge-light">Art Director</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1"
                                data-kt-search-category="users">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <img src="assets/media/avatars/150-12.jpg" alt="" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800 me-2">Edward Kulnic</span>
                                    <span class="badge badge-light">System Administrator</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Recently viewed-->
                    <!--begin::Recently viewed-->
                    <div data-kt-search-element="recently-viewed">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack fw-bold">
                            <span class="text-muted fs-5 me-2">Recently Viewed:</span>
                            <!--begin::Clear-->
                            <div data-kt-search-element="recently-viewed-clear" class="btn btn-link fw-6">Clear</div>
                            <!--end::Clear-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Items-->
                        <div class="scroll-y mh-200px mh-lg-300px my-2 me-n2 pe-2">
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z"
                                                    fill="black" />
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Si-Fi Project by AU Themes</span>
                                    <span class="fs-7 text-muted">#45670</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/finance/fin008.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                                    fill="black" />
                                                <path
                                                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">"Create FireStone API" Target</span>
                                    <span class="fs-7 text-muted">#84250</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                    fill="black" />
                                                <path opacity="0.3"
                                                    d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Reference to "FureStibe" Project FAQ</span>
                                    <span class="fs-7 text-muted">#67945</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                    fill="black" />
                                                <path
                                                    d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">"Landing UI Design" Project Launch</span>
                                    <span class="fs-7 text-muted">#24005</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
                                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                                    fill="black" />
                                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
                                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Shopix Mobile App Planning</span>
                                    <span class="fs-7 text-muted">#45690</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                    fill="black" />
                                                <rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
                                                <rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Finance Monitoring SAAS Discussion</span>
                                    <span class="fs-7 text-muted">#21090</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <a href="#"
                                class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-30px me-4">
                                    <span class="symbol-label bg-light-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                        <span class="svg-icon svg-icon-2 svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                    fill="black" />
                                                <path
                                                    d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </span>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Title-->
                                <div class="fw-bold">
                                    <span class="fs-6 text-gray-800">Dashboard Analitics Launch</span>
                                    <span class="fs-7 text-muted">#34560</span>
                                </div>
                                <!--end::Title-->
                            </a>
                            <!--end::Item-->
                        </div>
                        <!--end::Items-->
                    </div>
                    <!--end::Recently viewed-->
                    <!--begin::Empty-->
                    <div data-kt-search-element="empty" class="text-center d-none">
                        <!--begin::Message-->
                        <div class="text-muted fw-bold fs-5 py-10">No result found</div>
                        <!--end::Message-->
                        <!--begin::Illustration-->
                        <div class="text-center px-4">
                            <img src="assets/media/illustrations/dozzy-1/2.png" alt="" class="w-100 h-200px" />
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Empty-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Preferences-->
                <div data-kt-search-element="preferences" class="d-none">
                    <!--begin::Heading-->
                    <h3 class="fw-bold text-dark pb-10 m-0">Search Preferences</h3>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="pb-4 border-bottom">
                        <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                            <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Projects</span>
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="py-4 border-bottom">
                        <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                            <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Targets</span>
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="py-4 border-bottom">
                        <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                            <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Affiliate
                                Programs</span>
                            <input class="form-check-input" type="checkbox" value="1" />
                        </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="py-4 border-bottom">
                        <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                            <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Referrals</span>
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                        </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="py-4 border-bottom">
                        <label
                            class="form-check form-switch form-switch-sm form-check-custom form-check-solid justify-content-between">
                            <span class="form-check-label text-gray-700 fs-5 fw-bold ms-0 me-2">Users</span>
                            <input class="form-check-input" type="checkbox" value="1" />
                        </label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end pt-10">
                        <button type="reset" class="btn btn-white btn-active-light-primary me-2 px-6"
                            data-kt-search-element="preferences-dismiss">Cancel</button>
                        <button type="submit" class="btn btn-primary px-6">Save Changes</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Preferences-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Search-->
        <!--begin::Action-->
        <a href="#" class="btn btn-custom btn-color-white btn-active-color-success my-2 me-2 me-lg-6"
            data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">Invite Friend</a>
        <!--end::Action-->
        <!--begin::Button-->
        <a href="#" class="btn btn-success my-2" tooltip="New App" data-bs-toggle="modal"
            data-bs-target="#kt_modal_create_app">New Goal</a>
        <!--end::Button-->
    </div>
    @include('partials.dashboard-filter')
    <!--end::Actions-->
@endsection

@section('content-area')
    <div class="page-section">
        @livewire('dashboard')
    </div>
@endsection
