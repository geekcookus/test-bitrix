
	</div>

    <div class="modal" tabindex="-1" role="dialog" id="test-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" aria-label="Close" onclick="$('#test-modal').hide();"></button>
                </div>
                <div class="modal-body">
                    <input id="test-input" type="text" class="form-control" placeholder="">
                    <h5 id="test-modal-result" class="modal-title"><span class="text">ваш трек</span><span class="bar"></span></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="sendAjax()">Сохранить</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick="$('#test-modal').hide();">Закрыть</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>







  </body>
</html>
