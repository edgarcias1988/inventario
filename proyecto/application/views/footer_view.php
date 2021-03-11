<footer>


    <p class="text-center"><?php
        echo $this->session->nombreCompleto;    
    ?></p>


</footer>

<!-- Modal -->
<div class="modal fade" id="modalOK" tabindex="-1" aria-labelledby="headerOK" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="headerOK"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="textOK" class="text-center"></p>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalError" tabindex="-1" aria-labelledby="headerError" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="headerError"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="textError" class="text-center"></p>
      </div>
    </div>
  </div>
</div>

</body>

</html>