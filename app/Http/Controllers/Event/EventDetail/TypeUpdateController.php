<?php

namespace App\Http\Controllers\Event\EventDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Event;
use App\Traits\AdditionalValidationTrait;


class TypeUpdateController extends Controller
{
    use AdditionalValidationTrait;

    public function __invoke(Request $request)
    {
        $errors = $this->eventTypeValidation($request);
        if (!empty($errors)) {
            $errorMessage = json_encode(reset($errors));
            toastr()->AddError($errorMessage, 'Event update failed');
            return redirect()->back()->withErrors($errors)->withInput()->withFragment('event_setting');
        }


        $types = $this->prepareTypesToString($request->all());

        Event::where('event_id', $request->event_id)->update([
            'categories' => $types,
        ]);

        toastr()->AddSuccess('Event type updated successfully');
        return redirect()->back()->withFragment('event_setting');
    }

    private function prepareTypesToString($request): String
    {
        $types = '';
        foreach ($request as $key => $value) {
            if (Str::startsWith($key, 'type_')) {
                $types .= $value . ',';
            }
        }
        return rtrim($types, ',');
    }
}
