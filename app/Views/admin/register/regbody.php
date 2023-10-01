
<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
        <div class="mdl-card__supporting-text color--dark-gray">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <span class="mdl-card__title-text text-color--smooth-gray">GADREEL.</span>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <span class="login-name text-color--white">Sign up</span>
                </div>
                <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                    <form action="/authreg" method="post">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="username" placeholder="Username">
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                        <input class="mdl-textfield__input" type="text" name="password" placeholder="Password>
                        
                    </div>
                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect checkbox--colored-light-blue checkbox--inline" for="checkbox-1">
                        <input type="checkbox" id="checkbox-1" class="mdl-checkbox__input" checked>

                    </label>
                    <span class="login-link">I agree all statements in <a href="#" class="underlined">terms of service</a></span>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                    <a href="/login" class="login-link">I have already signed up</a>
                    <div class="mdl-layout-spacer"></div>
                    <a href="index.html">
                        <buttons class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                            SIGN UP
                        </buttons>
                    </a>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
    </main>
</div>

<!-- inject:js -->
<script src="<?= base_url(); ?> adminlogin/js/d3.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/getmdl-select.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/material.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/nv.d3.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/layout/layout.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/scroll/scroll.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/charts/discreteBarChart.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/charts/stackedBarChart.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/employer-form/employer-form.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/map/maps.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/table/table.min.js"></script>
<script src="<?= base_url(); ?> adminlogin/js/widgets/todo/todo.min.js"></script>
<!-- endinject -->