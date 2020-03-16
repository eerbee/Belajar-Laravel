@extends('layouts.admin.hal_calendar')

@section('content')
<script>
    var codeBlock = '<h2 class="title-1">KALENDAR</h2>';
    document.getElementById("title_page").innerHTML = codeBlock
</script>
<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                  <div class="au-card">
                    <div id="calendar"></div>
                  </div>
                </div><!-- .col -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop