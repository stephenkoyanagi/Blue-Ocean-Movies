<div class="modal fade hugeModal"  id="movievideo">
    <div class="modal-dialog modal-lg" style="background-color: #4C525C;">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header hugeModal" style="background-color: #A0514D;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
          
            <!-- Modal body -->
            <div class="modal-body" style="background-color: #4C525C;">
              <video-component movie-id= "{{ $id }}" movie-title= "{{ $name }}"></video-component>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer" style="background-color: #A0514D;">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      
        </div>
    </div>
</div>