<!--calendar-->
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="admin/css/calendar.css">
   </head>
   <!-- Calendar -->
<div id='calendar' class="pmd-calendar"></div>

<!-- Form Modal -->
<div tabindex="-1" class="modal pmd-modal fade add-dialog" id="createEventModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header pmd-modal-border">
                <h2 class="modal-title">Create Event</h2>
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
            </div>
      
            <div class="modal-body">
                <form id="createAppointmentForm">
                    <div class="form-group pmd-textfield pmd-textfield-floating-label">
                        <label for="mobil">Event Name</label>
                        <input type="text" class="form-control" name="patientName" id="patientName" tyle="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Value 1&quot;,&quot;Value 2&quot;,&quot;Value 3&quot;]">
                        <input type="hidden" class="form-control" id="apptStartTime"/>
                        <input type="hidden" class="form-control" id="apptEndTime"/>
                        <input type="hidden" class="form-control" id="apptAllDay" />
                    </div>
                    <div class="form-group pmd-textfield">
                        <label class="control-label" for="when">When:</label>
                        <div class="controls controls-row" id="when" style="margin-top:5px;"></div>
                    </div>  
                </form>
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" id="submitButton" class="btn pmd-ripple-effect btn-primary pmd-btn-raised" type="button">Send</button>
                <button data-dismiss="modal" class="btn pmd-ripple-effect btn-outline-dark" type="button">Reset</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>