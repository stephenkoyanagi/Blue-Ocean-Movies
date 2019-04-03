<div class="modal fade hugeModal"  id="moviecast">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
    
            <!-- Modal Header -->
            <div class="modal-header hugeModal bg-modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
          
            <!-- Modal body -->
            <div class="modal-body" style="background-color: #4C525C;">
              <get-credit-component movie-id= "{{ $id }}" movie-title= "{{ $name }}"></get-credit-component>
            </div>
      
            <!-- Modal footer -->
            <div class="modal-footer bg-modal-footer">
              <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
            </div>
      
        </div>
    </div>
</div>