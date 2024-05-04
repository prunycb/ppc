<li class="nav-item mt-3">
    <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Feed Management</h6>
</li>
<li class="nav-item">
    <a data-bs-toggle="collapse" href="#feedsExtend" class="nav-link {{ request()->routeIs([]) ? 'active' : '' }}" aria-controls="feedsExtend" role="button" aria-expanded="{{ request()->routeIs([]) ? 'true' : 'false' }}">
    <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center d-flex align-items-center justify-content-center  me-2">
        <svg width="12px" height="12px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>office</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g transform="translate(1716.000000, 291.000000)">
                <g id="office" transform="translate(153.000000, 2.000000)">
                <path class="color-background" d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z" opacity="0.6"></path>
                <path class="color-background" d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z"></path>
                </g>
            </g>
            </g>
        </g>
        </svg>
    </div>
    <span class="nav-link-text ms-1">Feeds</span>
    </a>
    <div class="collapse {{ request()->routeIs([]) ? 'show' : '' }}" id="feedsExtend">
        <ul class="nav ms-4 ps-3">
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <span class="sidenav-mini-icon"> I </span>
                    <span class="sidenav-normal"> Import </span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);">
                    <span class="sidenav-mini-icon"> E </span>
                    <span class="sidenav-normal"> Export </span>
                </a>
            </li>
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link {{ request()->routeIs('settings') ? 'active' : '' }}" href="javascript:void(0);">
        <div class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>shop </title>
                <g id="Basic-Elements" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="Rounded-Icons" transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g id="Icons-with-opacity" transform="translate(1716.000000, 291.000000)">
                            <g id="shop" transform="translate(1.000000, 0.000000)">
                                <path
                                    class="color-background"
                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z"
                                    id="Path"
                                    opacity="0.59858631"
                                ></path>
                                <path
                                    class="color-foreground"
                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z"
                                    id="Path"
                                ></path>
                                <path class="color-foreground" d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z" id="Path"></path>
                            </g>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <span class="nav-link-text ms-1">Data Settings</span>
    </a>
</li>