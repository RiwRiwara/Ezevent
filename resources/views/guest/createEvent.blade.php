<x-guest-layout>
  <h1 class="text-4xl text-center">Event Form</h1>
  <div class="container mx-auto pt-8 grid grid-cols-2 gap-4">
  <div class="col-span-1 border border-gray-200 rounded-lg p-4">
    <div class="mb-4">
      <label for="event-name" class="text-lg">Event Name</label>
    </div>
    <div class="mb-4">
    <input type="text" class="form-control" id="event-name" placeholder="Enter event name">
    </div>

    <div class="mb-4">
      <label for="event-types" class="text-lg">Event Types</label>
    </div>
    <div class="mb-4">
    <select class="form-control" id="event-types">
    <option value="online">Select Type</option>
        <option value="online">Online</option>
        <option value="offline">Offline</option>
      </select>
    </div>
    <div class="mb-4">
      <label for="event-badges" class="text-lg">Event Badges</label>
    </div>
    <div class="mb-4">
    <select class="form-control" id="event-badges">
        <option value="badge-1">Select badges</option>
        <option value="badge-1">Badge 1</option>
        <option value="badge-2">Badge 2</option>
        <option value="badge-3">Badge 3</option>
      </select>
      </div>
  </div>
    <div>
        <h1>Date & Time</h1>
        <div class="col-span-1 border border-gray-200 rounded-lg p-4">
            <div class="mb-4">
                <label for="start-date" class="text-lg">Start Date</label>
                <input type="date" class="form-control" id="start-date">
                <input type="time" class="form-control" id="start-time">
            </div>
            <div class="mb-4">
                <label for="end-date" class="text-lg">End Date</label>
                <input type="date" class="form-control" id="end-date">
                <input type="time" class="form-control" id="end-time">
            </div>
        </div>
        <h1>Location</h1>
        <div class="col-span-1 border border-gray-200 rounded-lg p-4">
            <div class="mb-4">
                <label for="location" class="text-lg">Location</label>
                <input type="text" class="form-control" id="location" placeholder="Enter location">
            </div>
            <div class="mb-4">
                <label for="venue" class="text-lg">Venue</label>
                <input type="text" class="form-control" id="venue" placeholder="Enter venue">
            </div>
            <div class="mb-4">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
</x-guest-layout>