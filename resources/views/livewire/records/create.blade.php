<div>
    <div>
        <div wire:ignore.self class="modal fade" id="treatmentModal" tabindex="-1" aria-labelledby="treatmentModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="treatmentModalLabel">Set New Record</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <div class="mb-2">
                            <label>Illness</label>
                            <input type="text" class="form-control" wire:model="illness">
                            @error('illness') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label>Symptoms</label>
                            <input type="string" class="form-control" wire:model="symptoms">
                            @error('symptoms') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>

                        <div class="mb-3">
                            <label>Medications</label>
                            <input type="string" class="form-control" wire:model="medications">
                            @error('medications') <span class="error text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <select class="form-select" name="severity" wire:model.defer="severity">
                                <option selected>Select Severity</option>
                                <option value="Asymptomatic">Asymptomatic</option>
                                <option value="Normal">Normal</option>
                                <option value="Moderate">Moderate</option>
                                <option value="Very Serious">Very Serious</option>
                            </select>

                            <label for="severity">Severity</label>
                            @error('severity')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary ms-2" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-primary" wire:click="addRecord()">Add Record</button>
                    </div>
              </div>
            </div>
          </div>
        </div>

    </div>

</div>
