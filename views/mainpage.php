<?php
session_start();
//error_reporting(0);
include('../include/config.php');
include('../include/checklogin.php');
include('./sidebar.php');
include('./header.php');

check_login();
?>

 <!-- Body: Body -->
 <div class="body d-flex py-3">
            <div class="container-xxl">
                <div class="row g-3 mb-3">
                    <div class="col-md-12 col-lg-4 col-xl-4 d-none d-lg-block">
                        <svg id="b142c218-c3ca-487e-979b-dffd11e3a76c"  class="cal-img " data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="100%" height="389.35169" viewBox="0 0 532.48525 389.35169">
                            <path d="M657.62709,439.57146a6.51369,6.51369,0,0,1-6.48976-6.0878l-.9666-14.75858a6.51365,6.51365,0,0,1,6.07385-6.92548l115.62688-7.57232a13.90881,13.90881,0,0,1,1.81772,27.75816l-115.62662,7.57183Q657.84421,439.57122,657.62709,439.57146Z" transform="translate(-333.75738 -255.32415)" fill="var(--secondary-color)"/>
                            <path d="M680.427,441.47433a6.52191,6.52191,0,0,1-6.50615-6.2708l-.824-22.04369a6.513,6.513,0,0,1,6.26591-6.75177l95.08311-3.55375a6.51385,6.51385,0,0,1,6.75226,6.26591l.824,22.04369a6.513,6.513,0,0,1-6.2659,6.75177l-95.08311,3.55375C680.59089,441.47286,680.50845,441.47433,680.427,441.47433Z" transform="translate(-333.75738 -255.32415)" fill="#2f2e41"/>
                            <path d="M791.8491,644.67585H777.05871a6.52087,6.52087,0,0,1-6.51349-6.51349V514.893a6.52087,6.52087,0,0,1,6.51349-6.51348H791.8491a6.52087,6.52087,0,0,1,6.51349,6.51348V638.16236A6.52087,6.52087,0,0,1,791.8491,644.67585Z" transform="translate(-333.75738 -255.32415)" fill="#2f2e41"/>
                            <path d="M754.7143,644.67585H739.92391a6.52087,6.52087,0,0,1-6.51349-6.51349V514.893a6.52087,6.52087,0,0,1,6.51349-6.51348H754.7143a6.52087,6.52087,0,0,1,6.51349,6.51348V638.16236A6.52087,6.52087,0,0,1,754.7143,644.67585Z" transform="translate(-333.75738 -255.32415)" fill="#2f2e41"/><circle cx="435.62828" cy="73.30445" r="51.10582" fill="var(--secondary-color)"/>
                            <path d="M741.7224,346.07792a12.12059,12.12059,0,0,1-4.42606-2.59809,8.15037,8.15037,0,0,1-2.38243-6.45236,5.48293,5.48293,0,0,1,2.43759-4.21982c1.82759-1.17234,4.27192-1.1758,6.76064-.079l-.09421-19.951,2.004-.00955.11086,23.4545-1.5442-.97135c-1.79064-1.12447-4.34788-1.916-6.15482-.7566a3.521,3.521,0,0,0-1.5247,2.72455,6.15892,6.15892,0,0,0,1.77145,4.81091c2.213,2.11392,5.44168,2.775,9.12357,3.36575l-.31763,1.97862A33.03108,33.03108,0,0,1,741.7224,346.07792Z" transform="translate(-333.75738 -255.32415)" fill="#2f2e41"/><rect x="727.57592" y="308.07255" width="2.0039" height="10.79402" transform="matrix(0.13093, -0.99139, 0.99139, 0.13093, -11.34164, 739.40982)" fill="#2f2e41"/><rect x="761.35331" y="312.53222" width="2.0039" height="10.79402" transform="translate(13.59208 776.77223) rotate(-82.4768)" fill="#2f2e41"/>
                            <path d="M725.88081,547.96632h-.00009a8.52716,8.52716,0,0,1-8.51764-8.51764s13.57921-73.67742,21.339-116.86035a36.37333,36.37333,0,0,1,35.79926-29.94363h.00007a46.07539,46.07539,0,0,1,46.07539,46.07539v14.55024A94.696,94.696,0,0,1,725.88081,547.96632Z" transform="translate(-333.75738 -255.32415)" fill="#2f2e41"/>
                            <path d="M790.35864,540.59071a6.52391,6.52391,0,0,1-5.98009,3.80507l-14.78976-.12843a6.51295,6.51295,0,0,1-6.45648-6.56975l1.00467-115.87a13.90824,13.90824,0,1,1,27.81543.24117l-1.00412,115.87A6.47722,6.47722,0,0,1,790.35864,540.59071Z" transform="translate(-333.75738 -255.32415)" fill="var(--secondary-color)"/>
                            <path d="M796.89226,509.65844a6.52358,6.52358,0,0,1-5.98,3.80485l-25.26174-.21914a6.5209,6.5209,0,0,1-6.45648-6.56976l.82512-95.1459a6.51295,6.51295,0,0,1,6.56963-6.45681l25.2613.21894a6.51295,6.51295,0,0,1,6.45649,6.56975l-.82468,95.14611A6.48519,6.48519,0,0,1,796.89226,509.65844Z" transform="translate(-333.75738 -255.32415)" fill="#2f2e41"/>
                            <path d="M754.6343,298.51405c-7.9642,1.35175-16.85609,2.89733-24.44478-.79571-5.97328-2.9069-10.08009-8.71259-8.62518-15.53409,2.89548-13.57569,18.43743-19.57763,30.92767-18.3664a33.17835,33.17835,0,0,1,19.63021,8.85084,1.81749,1.81749,0,0,0,3.06741-1.27056c-.05315-5.00947,3.69455-9.18969,8.13532-11.0767,5.56-2.36261,12.02054-1.51832,17.73484-.254a78.74679,78.74679,0,0,1,60.83363,65.858,77.868,77.868,0,0,1-2.5009,33.35023c-3.03124,9.95948-8.63018,19.96974-17.84813,25.38834-8.30647,4.8828-20.38476,6.14019-28.04987-.71022-6.13981-5.48723-8.90734-15.74534-3.87-22.84427a14.06282,14.06282,0,0,1,13.23124-5.72048,12.59183,12.59183,0,0,1,10.15717,9.0336,12.34855,12.34855,0,0,1-4.28719,12.17557,11.98985,11.98985,0,0,1-17.08764-3.2621c-1.22071-1.95857-4.331-.15647-3.103,1.8138a15.91988,15.91988,0,0,0,13.08837,7.34165,14.71593,14.71593,0,0,0,12.95418-7.25451A15.35938,15.35938,0,0,0,835.032,359.876a16.45392,16.45392,0,0,0-13.71557-8.21305,17.88422,17.88422,0,0,0-14.795,7.63283,19.00308,19.00308,0,0,0-2.76852,13.93458,23.0561,23.0561,0,0,0,6.77554,12.87447,23.81222,23.81222,0,0,0,15.10181,6.14228c12.18476.69494,23.06255-6.32472,29.78312-16.08243,6.97354-10.125,10.092-22.83033,10.72046-34.97715a82.43531,82.43531,0,0,0-27.72525-66.01717,83.76892,83.76892,0,0,0-30.40919-16.9906c-11.10146-3.40065-26.60128-5.87948-34.098,5.46345a13.81219,13.81219,0,0,0-2.30549,7.755l3.06741-1.27056c-10.84666-10.365-27.89773-12.98409-41.44177-6.61282-6.8027,3.20007-12.70035,9.15063-14.81478,16.48759-2.19389,7.61272.97872,15.08455,7.48524,19.402,8.855,5.87575,19.83684,4.24871,29.6976,2.57506,2.27529-.38618,1.31047-3.84989-.95534-3.46532Z" transform="translate(-333.75738 -255.32415)" fill="#2f2e41"/>
                            <path d="M642.25738,519.40775h-291a17.52,17.52,0,0,1-17.5-17.5v-174a17.52,17.52,0,0,1,17.5-17.5h291a17.52,17.52,0,0,1,17.5,17.5v174A17.52,17.52,0,0,1,642.25738,519.40775Zm-291-206a14.51669,14.51669,0,0,0-14.5,14.5v174a14.51669,14.51669,0,0,0,14.5,14.5h291a14.51669,14.51669,0,0,0,14.5-14.5v-174a14.5167,14.5167,0,0,0-14.5-14.5Z" transform="translate(-333.75738 -255.32415)" fill="#3f3d56"/>
                            <path d="M390.25738,351.40775a12.5,12.5,0,1,1,12.5-12.5A12.51408,12.51408,0,0,1,390.25738,351.40775Zm0-22a9.5,9.5,0,1,0,9.5,9.5A9.5108,9.5108,0,0,0,390.25738,329.40775Z" transform="translate(-333.75738 -255.32415)" fill="#3f3d56"/>
                            <path d="M601.25738,351.40775a12.5,12.5,0,1,1,12.5-12.5A12.51408,12.51408,0,0,1,601.25738,351.40775Zm0-22a9.5,9.5,0,1,0,9.5,9.5A9.5108,9.5108,0,0,0,601.25738,329.40775Z" transform="translate(-333.75738 -255.32415)" fill="#3f3d56"/>
                            <path d="M419.75738,427.40775h-54a8.51012,8.51012,0,0,1-8.5-8.5v-32a8.51013,8.51013,0,0,1,8.5-8.5h54a8.51014,8.51014,0,0,1,8.5,8.5v32A8.51013,8.51013,0,0,1,419.75738,427.40775Z" transform="translate(-333.75738 -255.32415)" fill="#e6e6e6"/>
                            <path d="M523.75738,427.40775h-54a8.51012,8.51012,0,0,1-8.5-8.5v-32a8.51013,8.51013,0,0,1,8.5-8.5h54a8.51014,8.51014,0,0,1,8.5,8.5v32A8.51013,8.51013,0,0,1,523.75738,427.40775Z" transform="translate(-333.75738 -255.32415)" fill="#e6e6e6"/>
                            <path d="M573.75738,379.40775a7.5082,7.5082,0,0,0-7.5,7.5v32a7.50819,7.50819,0,0,0,7.5,7.5h54a7.5082,7.5082,0,0,0,7.5-7.5v-32a7.5082,7.5082,0,0,0-7.5-7.5Z" transform="translate(-333.75738 -255.32415)" fill="#e6e6e6"/>
                            <path d="M420.25738,491.40775h-54a8.51012,8.51012,0,0,1-8.5-8.5v-32a8.51013,8.51013,0,0,1,8.5-8.5h54a8.51014,8.51014,0,0,1,8.5,8.5v32A8.51013,8.51013,0,0,1,420.25738,491.40775Z" transform="translate(-333.75738 -255.32415)" fill="#e6e6e6"/>
                            <path d="M524.25738,491.40775h-54a8.51012,8.51012,0,0,1-8.5-8.5v-32a8.51013,8.51013,0,0,1,8.5-8.5h54a8.51014,8.51014,0,0,1,8.5,8.5v32A8.51013,8.51013,0,0,1,524.25738,491.40775Z" transform="translate(-333.75738 -255.32415)" fill="#e6e6e6"/>
                            <path d="M628.25738,491.40775h-54a8.51012,8.51012,0,0,1-8.5-8.5v-32a8.51013,8.51013,0,0,1,8.5-8.5h54a8.51014,8.51014,0,0,1,8.5,8.5v32A8.51013,8.51013,0,0,1,628.25738,491.40775Z" transform="translate(-333.75738 -255.32415)" fill="#e6e6e6"/>
                            <path d="M390.25738,342.40775a3.50424,3.50424,0,0,1-3.5-3.5v-50a3.5,3.5,0,0,1,7,0v50A3.50425,3.50425,0,0,1,390.25738,342.40775Z" transform="translate(-333.75738 -255.32415)" fill="#3f3d56"/>
                            <path d="M601.25738,342.40775a3.50424,3.50424,0,0,1-3.5-3.5v-50a3.5,3.5,0,0,1,7,0v50A3.50425,3.50425,0,0,1,601.25738,342.40775Z" transform="translate(-333.75738 -255.32415)" fill="#3f3d56"/>
                            <path id="b5e0804e-c461-433c-b77b-73087ef71cb0" data-name="Path 395" d="M390.71607,415.879a6.78778,6.78778,0,0,1-4.08354-1.35714l-.073-.05479-15.38069-11.76574a6.83507,6.83507,0,0,1,8.31719-10.84883l9.96238,7.63962L413,368.77943a6.83219,6.83219,0,0,1,9.579-1.26526l.002.00148-.1461.20287.15006-.20287a6.84044,6.84044,0,0,1,1.26378,9.581l-27.69011,36.1087a6.83631,6.83631,0,0,1-5.43658,2.66555Z" transform="translate(-333.75738 -255.32415)" fill="var(--secondary-color)"/>
                            <path id="b3a0cc8c-ec19-4bca-9f18-6cf478ced8d1" data-name="Path 395" d="M497.71607,478.879a6.78778,6.78778,0,0,1-4.08354-1.35714l-.073-.05479-15.38069-11.76574a6.83507,6.83507,0,0,1,8.31719-10.84883l9.96238,7.63962L520,431.77943a6.83219,6.83219,0,0,1,9.579-1.26526l.002.00148-.1461.20287.15006-.20287a6.84044,6.84044,0,0,1,1.26378,9.581l-27.69011,36.1087a6.83631,6.83631,0,0,1-5.43658,2.66555Z" transform="translate(-333.75738 -255.32415)" fill="var(--secondary-color)"/>
                            <path id="b29a902b-cd84-4f58-97ad-17c408cf2b06" data-name="Path 395" d="M598.71607,415.879a6.78778,6.78778,0,0,1-4.08354-1.35714l-.073-.05479-15.38069-11.76574a6.83507,6.83507,0,0,1,8.31719-10.84883l9.96238,7.63962L621,368.77943a6.83219,6.83219,0,0,1,9.579-1.26526l.002.00148-.1461.20287.15006-.20287a6.84044,6.84044,0,0,1,1.26378,9.581l-27.69011,36.1087a6.83631,6.83631,0,0,1-5.43658,2.66555Z" transform="translate(-333.75738 -255.32415)" fill="var(--secondary-color)"/>
                        </svg>
                        <div class="calandarclock-block">
                            <div class="signboard outer">
                                <div class="signboard front inner anim04c">
                                    <ul>
                                        <li class="year anim04c">
                                            <span></span>
                                        </li>
                                        <li>
                                            <ul class="calendarMain anim04c">
                                                <li class="month anim04c">
                                                    <span></span>
                                                </li>
                                                <li class="date anim04c">
                                                    <span></span>
                                                </li>
                                                <li class="day anim04c">
                                                    <span></span>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="clock minute anim04c">
                                            <span></span>
                                        </li>
                                        <li class="calendarNormal date2 anim04c">
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="signboard left inner anim04c">
                                    <ul>
                                        <li class="clock hour anim04c">
                                            <span></span>
                                        </li>
                                        <li class="calendarNormal day2 anim04c">
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="signboard right inner anim04c">
                                    <ul>
                                        <li class="clock second anim04c">
                                            <span></span>
                                        </li>
                                        <li class="calendarNormal month2 anim04c">
                                            <span></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-8">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Patient Statistics</h6>
                            </div>
                            <div class="card-body">
                                <div id="apex-stacked-area"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-3 row-deck">
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Hospitality Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 row-deck">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-patient-file fs-3 text-secondary"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Total Appointment</h6>
                                                <span class="text-muted">400</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-crutch fs-3 color-lightblue"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Total Patients</h6>
                                                <span class="text-muted">117</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-doctor fs-3 color-light-orange"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Patients per Doctor</h6>
                                                <span class="text-muted">16</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-king-monster fs-3 color-careys-pink"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Covid Patients </h6>
                                                <span class="text-muted">144</span> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-doctor-alt fs-3 color-lavender-purple"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Total Doctor</h6>
                                                <span class="text-muted">200</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-6">
                                        <div class="card">
                                            <div class="card-body ">
                                                <i class="icofont-nurse-alt fs-3 color-light-success"></i>
                                                <h6 class="mt-3 mb-0 fw-bold small-14">Total Nurse </h6>
                                                <span class="text-muted">84</span> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6">
                        <div class="card">
                            <div class="card-header py-3 d-flex  bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Hospital Room Booking Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="room_book">
                                    <div class="row row-cols-2 row-cols-sm-4 row-cols-md-6 row-cols-lg-6 g-3">
                                        <div class="room col">
                                        <input type="checkbox" id="1A" checked/>
                                        <label for="1A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room A-101</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="1B" />
                                        <label for="1B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room B-102</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="1C" />
                                        <label for="1C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room C-103</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" disabled id="1D" />
                                        <label for="1D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Occupied</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="1E" />
                                        <label for="1E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room D-104</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="1F" checked/>
                                        <label for="1F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room E-105</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2A" />
                                        <label for="2A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room F-106</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2B" />
                                        <label for="2B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room G-107</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2C" checked/>
                                        <label for="2C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room H-108</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2D" />
                                        <label for="2D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room I-109</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2E" checked/>
                                        <label for="2E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room J-110</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="2F" />
                                        <label for="2F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room K-111</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3A" checked/>
                                        <label for="3A"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room L-112</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3B" />
                                        <label for="3B"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room M-113</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3C" />
                                        <label for="3C"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room N-114</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3D" />
                                        <label for="3D"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room O-115</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3E" checked/>
                                        <label for="3E"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room P-116</span></label>
                                        </div>
                                        <div class="room col">
                                        <input type="checkbox" id="3F" />
                                        <label for="3F"><i class="icofont-patient-bed fs-2"></i><span class="text-muted">Room Q-117</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <div class="row g-3 mb-3">
                    <div class="col-xl-8 col-lg-12 flex-column">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Addmission by Division</h6>
                            </div>
                            <div class="card-body">
                                <div id="hiringsources"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Patients Information</h6>
                            </div>
                            <div class="card-body">
                                <table id="myDataTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Patients</th>
                                            <th>Adress</th>
                                            <th>Admited</th>
                                            <th>Discharge</th>
                                            <th>Progress</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar3.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Molly </span></td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>May 13, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar1.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Brian</span></td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>May 13, 2021</td>
                                            <td>May 22, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar2.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Julia</span></td>
                                            <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>May 17, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar4.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Sonia</span></td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>May 13, 2021</td>
                                            <td>May 23, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar5.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Adam H</span></td>
                                            <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>May 18, 2021</td>
                                            <td>May 18, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar9.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Alexander</span></td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>May 13, 2021</td>
                                            <td>May 22, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar11.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Gabrielle</span></td>
                                            <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>May 17, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar12.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Grace</span></td>
                                            <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                            <td>May 17, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Discharge</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar8.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Ryan </span></td>
                                            <td>70 Bowman St. South Windsor, CT 06074</td>
                                            <td>May 13, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-info">Admit</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="assets/images/xs/avatar7.jpg" class="avatar sm rounded-circle me-2" alt="profile-image"><span>Christian</span></td>
                                            <td>123 6th St. Melbourne, FL 32904</td>
                                            <td>May 13, 2021</td>
                                            <td>May 22, 2021</td>
                                            <td>
                                                <div class="progress" style="height: 3px;">
                                                    <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-success">Discharge</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-12 flex-column">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Make appointment</h6>
                            </div>
                            <div class="card-body">
                                <div class="wrapper">
                                    <div id="calendar"> 
                                    <div class="monthChange"></div>
                                    <div class='timepicker'>
                                        <div class="owl">
                                          <div>06:00</div>
                                          <div>07:00</div>
                                          <div>08:00</div>
                                          <div>09:00</div>
                                          <div>10:00</div>
                                          <div>11:00</div>
                                          <div>12:00</div>
                                          <div>13:00</div>
                                          <div>14:00</div>
                                          <div>15:00</div>
                                          <div>16:00</div>
                                          <div>17:00</div>
                                          <div>18:00</div>
                                          <div>19:00</div>
                                          <div>20:00</div>
                                        </div>
                                        <div class="fade-l"></div>
                                        <div class="fade-r"></div>
                                      </div>
                                  </div>
                                  <div class="inner-wrap">
                                    <form>
                                        <div class="mb-3">
                                          <input type="text" class="form-control" id="ps-name" placeholder="Enter Name">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" id="ps-email" placeholder="Enter Email">
                                        </div>
                                        <select class="form-select mb-3" aria-label="Default select example">
                                            <option selected>Select Doctor</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <button type="submit" class="btn btn-primary disabled request"> Request appointment <span>On</span>
                                            <span class="day fw-bold text-dark"></span>
                                            <span>At</span>
                                            <span class="time fw-bold text-dark"></span>
                                            <i class="icofont-dotted-right fs-3"></i>
                                            </button>
                                      </form>
                                  </div>
                                  
                                  
                                    
                              </div>
                            </div>
                        </div>
                        <div class="card bg-secondary position-relative">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold text-white ">Doctor Of the Month</h6>  
                            </div>
                            <div class="card-body text-center p-4 text-white">
                                <img src="assets/images/profile_av.png" alt="" class="rounded-circle mb-3 img-thumbnail avatar xl shadow-sm">
                                <div class="d-flex align-items-center justify-content-center">
                                    <span class="mb-2 me-3">
                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-primary"></i></a>
                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-primary"></i></a>
                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-primary"></i></a>
                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-primary"></i></a>
                                        <a href="#" class="rating-link active"><i class="bi bi-star-half text-primary"></i></a>
                                    </span>
                                </div>
                                <h5 class="mb-0">Manuella Nevoresky</h5><span class="small">Cardiologists</span>
                                <div class="d-flex justify-content-center pt-3">
                                    <div class="opration d-flex justify-content-start align-content-center p-3">
                                        <i class="icofont-operation-theater fs-1"></i> 
                                        <div class="opt_ineer text-start ps-3">
                                            <span class="d-block">12</span>
                                            <span class="d-block">Oprations</span>
                                        </div>
                                    </div>
                                    <div class="pations-visit d-flex justify-content-start align-content-center p-3 border-start">
                                        <i class="icofont-crutch fs-1"></i>
                                        <div class="opt_ineer text-start ps-3">
                                            <span class="d-block">35</span>
                                            <span class="d-block">Patient</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cup">
                                    <i class="icofont-award"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .row end -->
            </div>
        </div>      
      
        <!-- Modal Custom Settings-->
        <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog  modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Custom Settings</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body custom_setting">
                        <!-- Settings: Color -->
                        <div class="setting-theme pb-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                            <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                                <li data-theme="indigo"><div class="indigo"></div></li>
                                <li data-theme="tradewind" class="active"><div class="tradewind"></div></li>
                                <li data-theme="monalisa"><div class="monalisa"></div></li>
                                <li data-theme="blue"><div class="blue"></div></li>
                                <li data-theme="cyan"><div class="cyan"></div></li>
                                <li data-theme="green"><div class="green"></div></li>
                                <li data-theme="orange"><div class="orange"></div></li>
                                <li data-theme="blush"><div class="blush"></div></li>
                                <li data-theme="red"><div class="red"></div></li>
                            </ul>
                        </div>
                        <div class="sidebar-gradient py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                            <div class="form-check form-switch gradient-switch pt-2 mb-2">
                                <input class="form-check-input" type="checkbox" id="CheckGradient">
                                <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                            </div>
                        </div>
                        <!-- Settings: Template dynamics -->
                        <div class="dynamic-block py-3">
                            <ul class="list-unstyled choose-skin mb-2 mt-1">
                                <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
                            </ul>
                            <div class="dt-setting">
                                <ul class="list-group list-unstyled mt-1">
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label>Primary Color</label>
                                        <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label>Secondary Color</label>
                                        <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 1</label>
                                        <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 2</label>
                                        <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 3</label>
                                        <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 4</label>
                                        <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                        <label class="text-muted">Chart Color 5</label>
                                        <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Settings: Font -->
                        <div class="setting-font py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                            <ul class="list-group font_setting mt-1">
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                        <label class="form-check-label" for="font-poppins">
                                            Poppins Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                        <label class="form-check-label" for="font-opensans">
                                            Open Sans Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                        <label class="form-check-label" for="font-montserrat">
                                            Montserrat Google Font
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item py-1 px-2">
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                        <label class="form-check-label" for="font-mukta">
                                            Mukta Google Font
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Settings: Light/dark -->
                        <div class="setting-mode py-3">
                            <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                            <ul class="list-group list-unstyled mb-0 mt-1">
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-switch mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-switch">
                                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-high-contrast mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                        <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                    </div>
                                </li>
                                <li class="list-group-item d-flex align-items-center py-1 px-2">
                                    <div class="form-check form-switch theme-rtl mb-0">
                                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary lift">Save Changes</button>
                    </div>
                </div>
            </div>
        </div>

<?php
include('./footor.php');


?>