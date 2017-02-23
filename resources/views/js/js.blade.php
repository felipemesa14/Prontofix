<!--
/**
 * Created by PhpStorm.
 * User: juanfelipe
 * Date: 15/02/17
 * Time: 03:44 PM
 */-->
<script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
</script>
{!! Html::script('Template/js/plugins/jquery/jquery.min.js') !!}
{!! Html::script('Template/js/plugins/jquery/jquery-ui.min.js') !!}
{!! Html::script('Template/js/plugins/bootstrap/bootstrap.min.js') !!}
{!! Html::script('Template/js/plugins/icheck/icheck.min.js') !!}
{!! Html::script('Template/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js') !!}
{!! Html::script('Template/js/settings.js') !!}
{!! Html::script('Template/js/plugins.js') !!}
{!! Html::script('Template/js/actions.js') !!}