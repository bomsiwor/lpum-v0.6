<!-- ============================================================= -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================= -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Pagu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('pagu') }}"
                        aria-expanded="false">
                        <i data-feather="pie-chart"></i><span class="hide-menu">Utama</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('profile') }}"
                        aria-expanded="false">
                        <i class="mdi mdi-home-account"></i><span class="hide-menu">Profil</span>
                    </a>
                </li>
                @role('Admin')
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)"
                            aria-expanded="false"><i class="mdi mdi-security"></i><span class="hide-menu">Menu Admin
                            </span></a>
                        <ul aria-expanded="false" class="collapse first-level">
                            <li class="sidebar-item">
                                <a href="{{ route('admin.manageUser') }}" class="sidebar-link"><i
                                        class="mdi mdi-table-account"></i><span class="hide-menu"> Kelola User</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link"><i class="mdi mdi-lock-alert-outline"></i><span
                                        class="hide-menu"> Kelola Privilege</span></a>
                            </li>
                            <li class="sidebar-item">
                                <a href="{{ route('km.manage') }}" class="sidebar-link"><i
                                        class="mdi mdi-account-group-outline"></i><span class="hide-menu"> Kelola Organisasi
                                    </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('admin.manageElection') }}"><i
                                        class="mdi mdi-vote"></i><span class="hide-menu">Kelola
                                        pemilu </span></a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="{{ route('admin.manageSites') }}"><i
                                        class="mdi mdi-web"></i><span class="hide-menu">Pengaturan Situs</span></a>
                            </li>
                        </ul>
                    </li>
                @endrole

                <li class="nav-small-cap">
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Pemilu</span>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('election.coblos') }}"
                        aria-expanded="false"><i class="mdi mdi-pin"></i><span class="hide-menu">Coblosan</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('vote.result.index') }}"
                        aria-expanded="false"><i class="mdi mdi-chart-box"></i><span class="hide-menu">Hasil
                            Pemilu</span></a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('election.index') }}"
                        aria-expanded="false"><i class="mdi mdi-calendar-account-outline"></i><span
                            class="hide-menu">Semua
                            Pemilu</span></a>
                </li>
                <li class="nav-small-cap">
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Penting</span>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('agenda') }}"
                        aria-expanded="false"><i class="mdi mdi-calendar-clock"></i><span
                            class="hide-menu">Agenda</span></a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('km.index') }}"
                        aria-expanded="false"><i class="mdi mdi-account-group"></i><span class="hide-menu">Info
                            KM</span></a>
                </li>

                <li class="nav-small-cap">
                    <i class="nav-small-line"></i>
                    <span class="hide-menu">Lainnya</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('contact') }}"
                        aria-expanded="false"><i data-feather="check-square"></i><span class="hide-menu">Kontak
                            Kami</span></a>
                </li>
            </ul>
            <div class="text-center d-md-none">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-purple">Logout!</button>
                </form>
            </div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
