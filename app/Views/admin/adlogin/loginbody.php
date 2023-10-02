<div class="mdl-layout mdl-js-layout color--gray is-small-screen login">
    <main class="mdl-layout__content">
        <div class="mdl-card mdl-card__login mdl-shadow--2dp">
            <div class="mdl-card__supporting-text color--dark-gray">
                <div class="mdl-grid">
                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                        <span class="mdl-card__title-text text-color--smooth-gray">GADREEL.</span>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                        <span class="login-name text-color--white">Sign in</span>
                        <span class="login-secondary-text text-color--smoke">Enter fields to sign in to GADREEL.</span>
                    </div>
                    <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                        <form action="/authlogin" method="post">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="text" id="username" name="username">
                                <label class="mdl-textfield__label" for="username">Username</label>
                            </div>
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-size">
                                <input class="mdl-textfield__input" type="password" id="password" name="password">
                                <label class="mdl-textfield__label" for="password">Password</label>
                            </div>
                                <a href="forgot-password.html" class="login-link">Forgot password?</a>
                            </div>
                            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone submit-cell">
                            <a href="/register" class="login-link">Don't have account?</a>
                            <div class="mdl-layout-spacer"></div>
                            <!-- Use a <button> element for form submission -->
                            <button type="submit" href="/ecommerce.php" class="mdl-button mdl-js-button mdl-button--raised color--light-blue">
                                SIGN IN
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!-- inject:js -->
<script src="<?= base_url(); ?>adminlogin/js/d3.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/getmdl-select.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/material.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/nv.d3.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/layout/layout.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/scroll/scroll.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/charts/discreteBarChart.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/charts/linePlusBarChart.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/charts/stackedBarChart.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/employer-form/employer-form.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/line-chart/line-charts-nvd3.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/map/maps.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/pie-chart/pie-charts-nvd3.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/table/table.min.js"></script>
<script src="<?= base_url(); ?>adminlogin/js/widgets/todo/todo.min.js"></script>
<!-- endinject -->