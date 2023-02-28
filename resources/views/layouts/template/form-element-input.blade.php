<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input - Mazer Admin Dashboard</title>

    <link rel="stylesheet" href="{{ asset ('assets/css/main/app.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/main/app-dark.css')}}">
    <link rel="shortcut icon" href="{{ asset ('assets/images/logo/favicon.svg')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset ('assets/images/logo/favicon.png')}}" type="image/png">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo">
                            <a href="index.html"><img src="{{ asset ('assets/images/logo/logo.svg')}}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                                <label class="form-check-label" ></label>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li
                            class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Forms &amp; Tables</li>

                        <li
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Form Elements</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="/user/edit">Edit</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Input</h3>
                <p class="text-subtitle text-muted">Give textual form controls like input upgrade with custom styles,
                    sizing, focus states, and more.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Input</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Basic Inputs</h4>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="basicInput">Basic Input</label>
                            <input type="text" class="form-control" id="basicInput" placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="helpInputTop">Input text with help</label>
                            <small class="text-muted">eg.<i>someone@example.com</i></small>
                            <input type="text" class="form-control" id="helpInputTop">
                        </div>

                        <div class="form-group">
                            <label for="helperText">With Helper Text</label>
                            <input type="text" id="helperText" class="form-control" placeholder="Name">
                            <p><small class="text-muted">Find helper text here for given textbox.</small></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="disabledInput">Disabled Input</label>
                            <input type="text" class="form-control" id="disabledInput" placeholder="Disabled Text"
                                disabled>
                        </div>
                        <div class="form-group">
                            <label for="disabledInput">Readonly Input</label>
                            <input type="text" class="form-control" id="readonlyInput" readonly="readonly"
                                value="You can't update me :P">
                        </div>

                        <div class="form-group">
                            <label for="disabledInput">Static Text</label>
                            <p class="form-control-static" id="staticInput">email@mazer.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Input Style start -->
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Styles</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>To set rounded border to input box, use <code>.round</code> class and
                                    to set square border to input box, use <code>.sqaure</code> class alongwith
                                    <code>.form-control</code> class.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="roundText">Rounded Input</label>
                                    <input type="text" id="roundText" class="form-control round"
                                        placeholder="Rounded Input">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="squareText">Square Input</label>
                                    <input type="text" id="squareText" class="form-control square"
                                        placeholder="Square Input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input Style end -->

    <!-- Horizontal Input start -->
    <section id="horizontal-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Input</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>To make label in center of form-control, use <code>.col-form-label</code> class with
                                    <code>&lt;label&gt;</code> element. This is default bootstrap class.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">First Name</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <input type="text" id="first-name" class="form-control" name="fname"
                                            placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <input type="text" id="last-name" class="form-control" name="fname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Horizontal Input end -->

    <!-- Basic File Browser start -->
    <section id="input-file-browser">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">File Input</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Default file input example</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="formFileMultiple" class="form-label">Multiple files input
                                        example</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                </div>
                                <div class="mb-3">
                                    <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                                    <input class="form-control" type="file" id="formFileDisabled" disabled>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">

                                <div class="mb-3">
                                    <label for="formFileSm" class="form-label">Small file input example</label>
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                </div>
                                <div>
                                    <label for="formFileLg" class="form-label">Large file input example</label>
                                    <input class="form-control form-control-lg" id="formFileLg" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic File Browser end -->

    <!-- Input with Icons start -->
    <section id="input-with-icons">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input with Icons</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>For Input Box with icon use <code>.position-relative</code> class with
                                    <code>.form-group</code> and use class <code>.has-icon-left</code> or
                                    <code>.has-icon-right</code> class for icon on
                                    left side.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <h6>Left Icon</h6>
                                <div class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control is-invalid" placeholder="Input with icon left">
                                    <div class="form-control-icon">
                                        <i class="bi bi-person"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Right Icon</h6>
                                <div class="form-group position-relative has-icon-right">
                                    <input type="text" class="form-control" placeholder="Icon Right, Default Input">
                                    <div class="form-control-icon">
                                        <i class="bi bi-bookmarks"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input with Icons end -->

    <!-- Input Sizing start -->
    <section id="input-sizing">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Control Sizing Option</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>For different sizes of Input, Use classes like <code>.form-control-lg</code> &amp;
                                    <code>.form-control-sm</code> for Large, Small input box.
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h6>Large</h6>
                                <input class="form-control form-control-lg" type="text" placeholder="Large Input">
                            </div>
                            <div class="col-sm-4">
                                <h6>Default</h6>
                                <input class="form-control" type="text" placeholder="Default Input">
                            </div>
                            <div class="col-sm-4">
                                <h6>Small</h6>
                                <input class="form-control form-control-sm" type="text" placeholder="Small Input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input Sizing end -->

    <!-- validations start -->
    <section id="input-validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Validation States</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>You can indicate invalid and valid form fields with <code>.is-invalid</code> and
                                    <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also supported
                                    with these classes.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <label for="valid-state">Valid State</label>
                                <input type="text" class="form-control is-valid" id="valid-state" placeholder="Valid"
                                    value="Valid" required>
                                <div class="valid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    This is valid state.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="invalid-state">Invalid State</label>
                                <input type="text" class="form-control is-invalid" id="invalid-state"
                                    placeholder="Invalid" value="Invalid" required>
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    This is invalid state.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- validations end -->

</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset ('assets/js/bootstrap.js')}}"></script>
    <script src="{{ asset ('assets/js/app.js')}}"></script>

</body>

</html>
