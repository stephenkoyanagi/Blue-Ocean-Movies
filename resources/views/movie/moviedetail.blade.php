<div class="modal fade hugeModal"  id="moviedetail">
    <div class="modal-dialog modal-lg" style="background-color: #4C525C;">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header hugeModal" style="background-color: #A0514D;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
          
            <!-- Modal body -->
            <div class="modal-body" style="background-color: #4C525C;">
              <movie-detail-component movie-id= "{{ $id }}" movie-title= "{{ $name }}"></movie-detail-component>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer" style="background-color: #A0514D;">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
      
        </div>
    </div>
</div> 