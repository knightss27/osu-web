{{--
    Copyright 2015-2017 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
<div id="js-sticky-header" class="sticky-header" data-visibility="hidden">
    @yield('sticky-header-stripe')
    <div class="osu-page">
        <div class="sticky-header__body">
            <div class="sticky-header__logo">
                @include('objects.logo_menu', ['logoMenuHoverBgClass' => 'u-forum--bg-link'])
            </div>

            <div class="sticky-header__content">
                <div class="sticky-header__breadcrumbs">
                    @yield('sticky-header-breadcrumbs')
                </div>
                <div id="js-sticky-header-content">
                    @yield('sticky-header-content')
                </div>
            </div>
        </div>
    </div>
</div>
