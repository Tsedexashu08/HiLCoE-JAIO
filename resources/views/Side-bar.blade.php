<div class="account-page">
    <div class="side-nav">
        <div class="image">
            <img src="{{ asset('storage/' . Auth::user()->profile_picture) }}" alt="profile-picture">
        </div>
        <section class="credentials">
            <span>{{ Auth::user()->name }}</span>
            <h2>{{ Auth::user()->email }}</h2>
        </section>
        <ul>
            <li><button id="applied-careers-link">
                    <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="81px" height="81px"
                        viewBox="-6.85 -6.85 89.86 89.86" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g>
                                <path
                                    d="M62.943,20.161H13.216v-7.393h49.728V20.161z M13.216,46.369h19.712V26.657H13.216V46.369z M13.216,57.792h26.88 c-0.673-0.672-1.345-1.567-1.792-2.464H13.216V57.792z M13.216,51.969h23.52c-0.224-0.896-0.672-1.566-0.896-2.465H13.216V51.969z M41.664,29.121c0.896-0.896,2.016-1.792,3.137-2.464h-6.497v2.464H41.664z M13.216,63.393h34.72 c-1.567-0.672-2.912-1.567-4.479-2.465h-30.24V63.393z M75.936,49.504c-0.672,2.912-2.016,5.377-3.584,7.616l3.81,6.72V48.833 C76.16,49.057,76.16,49.281,75.936,49.504z M63.393,72.801l-0.449-1.121H8.96c-2.464,0-4.48-2.016-4.48-4.479V8.96 c0-2.464,2.016-4.479,4.48-4.479H67.2c2.464,0,4.479,2.017,4.479,4.479v21.728c0.896,0.896,1.566,2.019,2.238,3.139 c1.12,1.792,1.792,3.584,2.24,5.603V8.96C76.16,4.033,72.128,0,67.2,0H8.96C4.032,0,0,4.033,0,8.96v58.24 c0,4.928,4.032,8.96,8.96,8.96h56.448l-0.225-0.448L63.393,72.801z M40.768,52.865c-4.705-8.288-1.791-19.04,6.496-23.744 c8.289-4.704,19.041-1.792,23.743,6.496c4.929,8.288,2.017,19.04-6.271,23.743C56.225,64.289,45.695,61.376,40.768,52.865z M63.168,56.897c6.943-4.033,9.409-12.994,5.376-19.938c-4.032-6.942-12.991-9.405-19.937-5.376 c-6.943,4.034-9.407,12.994-5.375,19.938C47.264,58.465,56.225,60.928,63.168,56.897z M68.993,58.079l-7.565,4.367l5.822,10.088 l7.566-4.366L68.993,58.079z M68.096,73.92c1.121,2.016,3.811,2.688,5.824,1.568c2.016-1.12,2.688-3.809,1.568-5.824L68.096,73.92z ">
                                </path>
                            </g>
                        </g>
                    </svg>
                    Applied Careers
                </button></li>
            <li><button id="resume-link">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-19.66 -19.66 530.84 530.84"
                        xml:space="preserve" width="80px" height="80px" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <polygon style="fill:#EBF0F3;"
                                points="326.95,0 62.336,0 62.336,491.52 429.184,491.52 429.184,102.234 "></polygon>
                            <polygon style="fill:#D5D6DB;" points="326.95,102.234 429.184,102.234 326.95,0 "></polygon>
                            <polygon style="fill:#E1E6E9;" points="429.184,102.234 326.95,102.234 429.184,173.099 ">
                            </polygon>
                            <g>
                                <path style="fill:#F6C358;"
                                    d="M157.6,124.931l0.043,0.028l0,0v-0.038l0.019,0.026l0.023-0.015v-0.001l0.008-0.01v0.005 l16.108-10.764l0.002,0.001v-17.84c-1.219,0.839-2.388,1.748-3.486,2.74c-7.068,6.39-14,5.295-14,5.295 c-4.228,0.112-10.251-4.22-12.82-6.237c-0.653-0.514-1.324-1.004-2.013-1.469v17.511l0.001-0.001L157.6,124.931z">
                                </path>
                                <polygon style="fill:#F6C358;"
                                    points="157.642,118.613 157.643,118.614 157.643,118.612 157.643,118.612 152.431,125.71 152.431,125.71 ">
                                </polygon>
                            </g>
                            <path style="fill:#64798A;"
                                d="M184.576,77.31c0,0,0.931-6.289,4.152-11.454c0.782-1.254,1.21-2.696,1.21-4.174V45.427 c0,0-1.015-7.971-8.84-9.855c0,0,3.188-6.787-5.072-8.393h-30.433l0,0c-11.124,0-20.143,9.019-20.143,20.143v11.942 c0,2.587,0.866,5.105,2.486,7.123c1.275,1.587,2.599,4.083,2.803,7.695">
                            </path>
                            <path style="fill:#FCD462;"
                                d="M156.316,107.742c0,0,6.932,1.095,14-5.295c1.098-0.992,2.267-1.901,3.486-2.74 c0.12-0.083,0.238-0.169,0.358-0.25c3.13-2.102,9.141-7.93,10.415-22.147V58.47c0,0-0.725-6.667-7.826-9.275l-10.554-3.705 c-1.968-0.691-4.115-0.664-6.065,0.077c-2.187,0.83-5.074,1.904-6.89,2.487c-0.871,0.279-1.778,0.417-2.693,0.417H140.52 c0,0-7.826,1.014-9.782,9.781v15.83v3.662c0,0,0.34,15.397,10.535,22.145c0.071,0.047,0.139,0.098,0.211,0.147 c0.688,0.465,1.359,0.955,2.013,1.469C146.064,103.522,152.088,107.854,156.316,107.742z">
                            </path>
                            <g>
                                <polygon style="fill:#D5D6DB;"
                                    points="162.854,124.331 159.555,129.068 162.602,148.269 170.237,134.387 "></polygon>
                                <polygon style="fill:#D5D6DB;"
                                    points="152.936,149.451 156.276,128.402 152.644,123.186 144.552,134.206 "></polygon>
                                <polygon style="fill:#D5D6DB;"
                                    points="152.431,125.71 152.211,126.01 157.643,118.64 157.643,118.614 157.642,118.613 ">
                                </polygon>
                            </g>
                            <g>
                                <polygon style="fill:#E56353;"
                                    points="162.946,146.473 160.357,130.154 163.16,126.128 163.16,126.128 157.643,118.612 157.643,118.614 157.643,118.64 152.211,126.01 152.151,126.091 152.15,126.092 152.15,126.092 154.979,130.154 152.378,146.545 152.378,146.545 157.643,156.117 162.946,146.475 ">
                                </polygon>
                                <polygon style="fill:#E56353;"
                                    points="157.675,156.176 158.177,155.672 157.659,156.147 "></polygon>
                                <polygon style="fill:#E56353;"
                                    points="157.626,156.147 157.108,155.672 157.611,156.176 "></polygon>
                                <polygon style="fill:#E56353;"
                                    points="157.619,156.184 157.643,156.208 157.666,156.184 157.643,156.162 157.643,156.162 157.642,156.162 ">
                                </polygon>
                                <polygon style="fill:#E56353;"
                                    points="157.693,118.572 157.685,118.582 157.693,118.578 "></polygon>
                                <polygon style="fill:#E56353;"
                                    points="157.643,118.572 157.643,118.611 157.662,118.598 "></polygon>
                            </g>
                            <g>
                                <polygon style="fill:#E1E6E9;"
                                    points="157.693,118.578 157.685,118.582 157.685,118.583 157.662,118.598 157.643,118.611 157.643,118.611 157.643,118.612 157.643,118.612 157.643,118.612 163.16,126.128 169.437,134.675 182.496,110.931 173.802,107.814 173.801,107.814 ">
                                </polygon>
                                <polygon style="fill:#E1E6E9;"
                                    points="152.15,126.092 152.151,126.091 152.431,125.71 157.643,118.612 157.643,118.612 157.643,118.611 157.6,118.583 141.484,107.814 141.484,107.814 132.789,110.931 145.849,134.675 ">
                                </polygon>
                            </g>
                            <g>
                                <path style="fill:#3A556A;"
                                    d="M157.675,156.176l0.018,0.032h6.797h51.92c3.717,0,6.545-3.335,5.938-7.002l-2.925-17.663 c-0.789-4.764-4.089-8.731-8.63-10.374l-28.297-10.238">
                                </path>
                                <polygon style="fill:#3A556A;"
                                    points="157.666,156.184 157.643,156.208 157.643,156.208 157.693,156.208 "></polygon>
                            </g>
                            <g>
                                <polygon style="fill:#2F4859;"
                                    points="162.946,146.475 157.643,156.117 157.643,156.117 157.659,156.147 158.177,155.672 183.8,132.234 180.612,126.147 190.012,126.002 182.496,110.931 169.437,134.675 ">
                                </polygon>
                                <polygon style="fill:#2F4859;"
                                    points="157.619,156.184 157.642,156.162 157.643,156.162 157.626,156.147 157.611,156.176 ">
                                </polygon>
                            </g>
                            <path style="fill:#3A556A;"
                                d="M157.619,156.183l-0.008-0.007l-24.822-45.245l-28.297,10.238c-4.541,1.643-7.841,5.609-8.63,10.373 l-2.925,17.665c-0.607,3.666,2.222,7.001,5.939,7.001h51.97h4.013h0.05h2.734h0.001L157.619,156.183z">
                            </path>
                            <polygon style="fill:#2F4859;"
                                points="157.675,156.176 157.659,156.147 157.643,156.117 157.643,156.117 152.378,146.545 145.849,134.675 132.789,110.931 125.274,126.002 134.673,126.147 131.485,132.234 157.108,155.672 157.626,156.147 157.643,156.162 157.643,156.162 157.666,156.184 157.693,156.208 ">
                            </polygon>
                            <g>
                                <rect x="92.314" y="196.25" style="fill:#D5D6DB;" width="306.857" height="8.934"></rect>
                                <rect x="92.314" y="235.331" style="fill:#D5D6DB;" width="306.857" height="8.934">
                                </rect>
                                <rect x="92.314" y="274.381" style="fill:#D5D6DB;" width="306.857" height="8.934">
                                </rect>
                                <rect x="92.314" y="313.446" style="fill:#D5D6DB;" width="306.857" height="8.934">
                                </rect>
                                <rect x="92.314" y="352.497" style="fill:#D5D6DB;" width="306.857" height="8.934">
                                </rect>
                                <rect x="92.314" y="391.578" style="fill:#D5D6DB;" width="306.857" height="8.934">
                                </rect>
                                <rect x="92.314" y="430.592" style="fill:#D5D6DB;" width="250.506" height="8.934">
                                </rect>
                            </g>
                        </g>
                    </svg>
                    Update Resume</button></li>
            <li><button id="edit-link">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-15.36 -15.36 542.72 542.72"
                        xml:space="preserve" width="80px" height="80px" fill="#000000">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <circle cx="174.84" cy="75.096" r="75.096"></circle>
                            <path d="M171.296,324.736L98.736,167.44c0,0-76.112,1.016-76.112,71.032v86.264H171.296z">
                            </path>
                            <path d="M178.392,324.736l72.544-157.296c0,0,76.112,1.016,76.112,71.032v86.264H178.392z">
                            </path>
                            <polygon style="fill:#E21B1B;"
                                points="174.84,167.44 122.584,167.44 174.84,283.128 227.104,167.44 "></polygon>
                            <polygon style="fill:#D8D6D6;"
                                points="157.568,512 250.568,487.664 489.328,248.904 420.672,180.24 181.904,419 ">
                            </polygon>
                            <polyline style="fill:#6B6B6B;" points="170.912,461 157.568,512 208.568,498.656 ">
                            </polyline>
                            <rect x="411.649" y="204.155"
                                transform="matrix(0.7071 -0.7071 0.7071 0.7071 -56.6027 368.7615)" width="10.368"
                                height="97.103"></rect>
                            <rect x="172" y="297.838"
                                transform="matrix(0.7071 -0.7071 0.7071 0.7071 -150.2834 329.9629)" width="302.317"
                                height="97.103"></rect>
                            <rect x="402.2" y="187.901"
                                transform="matrix(0.7071 -0.7071 0.7071 0.7071 -40.3288 375.5429)"
                                style="fill:#E21B1B;" width="61.911" height="97.103"></rect>
                            <g style="opacity:0.25;">
                                <polygon style="fill:#FFFFFF;"
                                    points="157.568,512 456.288,215.856 420.672,180.248 181.944,418.96 "></polygon>
                            </g>
                            <g>
                                <polygon style="fill:#666666;"
                                    points="240.192,477.208 238.36,475.368 267.968,445.768 267.968,432.816 329.4,371.384 345.808,371.384 391.048,326.136 411.952,326.136 409.488,328.728 392.12,328.728 346.88,373.976 330.472,373.976 270.56,433.888 270.56,446.84 ">
                                </polygon>
                                <polygon style="fill:#666666;"
                                    points="193.704,430.776 191.88,428.944 301.864,319 301.864,310.624 360.312,252.184 360.312,240.608 362.904,238.088 362.904,253.256 304.456,311.696 304.456,320.072 ">
                                </polygon>
                            </g>
                        </g>
                    </svg>
                    Edit Account</button></li>
        </ul>
    </div>
    <div class="display">
        <div id="edit">
            @include('edit')
        </div>
        <div id="updateResume">
            @include('updateResume')
        </div>
        <div id="applied">
            <h1>Applied Careers</h1>
        </div>
    </div>

    <script>
        var applied = document.getElementById('applied');
        var edit = document.getElementById('edit');
        var resume = document.getElementById('updateResume');

        document.getElementById('applied-careers-link').addEventListener('click', function(event) {
            if (edit.style.display != 'none') {
                edit.style.display = 'none';
            } else if (resume.style.display != 'none') {
                resume.style.display = 'none';
            }
            applied.style.display = 'block';

        });

        document.getElementById('resume-link').addEventListener('click', function(event) {
            if (edit.style.display != 'none') {
                edit.style.display = 'none';
            } else if (applied.style.display != 'none') {
                applied.style.display = 'none';
            }
            resume.style.display = 'block';
        });

        document.getElementById('edit-link').addEventListener('click', function(event) {
            if (resume.style.display != 'none') {
                resume.style.display = 'none';
            } else if (applied.style.display != 'none') {
                applied.style.display = 'none';
            }
            edit.style.display = 'block';
        });
    </script>
</div>
{{-- @endsection --}}
