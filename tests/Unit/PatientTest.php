<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Collection;

class PatientTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_a_patient_has_data()
    {
        $this -> withoutExceptionHandling();

        $this -> assertContains(1, Patient::all());
    }
}
