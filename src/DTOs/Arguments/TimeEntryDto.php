<?php

namespace Sumer5020\ZohoBooks\DTOs\Arguments;

/**
 * Class TimeEntryDto
 * Data Transfer Object for a Time Entry.
 */
class TimeEntryDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string Unique ID of the time entry */
     private string $time_entry_id;

    /** @var string Search time entries by project ID */
     private string $project_id;

    /** @var string Name of the project */
     private string $project_name;

    /** @var string Search projects by customer ID */
     private string $customer_id;

    /** @var string Name of the customer */
     private string $customer_name;

    /** @var string ID of the task */
     private string $task_id;

    /** @var string Name of the task */
     private string $task_name;

    /** @var string Search time entries by user ID */
     private string $user_id;

    /** @var string Name of the user */
     private string $user_name;

    /** @var bool Check if the user is the current user */
     private bool $is_current_user;

    /** @var string Date on which the user spent time on the task (format: HH:mm) */
     private string $log_date;

    /** @var string Begin time of the entry */
     private string $begin_time;

    /** @var string End time of the entry */
     private string $end_time;

    /** @var string Total logged time */
     private string $log_time;

    /** @var bool Check if the time entry is billable */
     private bool $is_billable;

    /** @var string Status of the billing */
     private string $billed_status;

    /** @var string ID of the associated invoice */
     private string $invoice_id;

    /** @var string Notes associated with the time entry */
     private string $notes;

    /** @var string When the timer started */
     private string $timer_started_at;

    /** @var string UTC time when the timer started */
     private string $timer_started_at_utc_time;

    /** @var string Duration of the timer in minutes */
     private string $timer_duration_in_minutes;

    /** @var string Duration of the timer in seconds */
     private string $timer_duration_in_seconds;

    /** @var string Created time of the entry */
     private string $created_time;

    /** @var string Custom fields for the time sheet */
     private string $timesheet_custom_fields;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->time_entry_id = $data['time_entry_id'] ?? '';
        $this->project_id = $data['project_id'] ?? '';
        $this->project_name = $data['project_name'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->task_id = $data['task_id'] ?? '';
        $this->task_name = $data['task_name'] ?? '';
        $this->user_id = $data['user_id'] ?? '';
        $this->user_name = $data['user_name'] ?? '';
        $this->is_current_user = $data['is_current_user'] ?? false;
        $this->log_date = $data['log_date'] ?? '';
        $this->begin_time = $data['begin_time'] ?? '';
        $this->end_time = $data['end_time'] ?? '';
        $this->log_time = $data['log_time'] ?? '';
        $this->is_billable = $data['is_billable'] ?? false;
        $this->billed_status = $data['billed_status'] ?? '';
        $this->invoice_id = $data['invoice_id'] ?? '';
        $this->notes = $data['notes'] ?? '';
        $this->timer_started_at = $data['timer_started_at'] ?? '';
        $this->timer_started_at_utc_time = $data['timer_started_at_utc_time'] ?? '';
        $this->timer_duration_in_minutes = $data['timer_duration_in_minutes'] ?? '';
        $this->timer_duration_in_seconds = $data['timer_duration_in_seconds'] ?? '';
        $this->created_time = $data['created_time'] ?? '';
        $this->timesheet_custom_fields = $data['timesheet_custom_fields'] ?? '';
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return array_reduce($this->_data, function ($result, $key) {
            if (property_exists($this, $key)) {
                $result[$key] = $this->$key;
            }
            return $result;
        }, []);
    }
}
