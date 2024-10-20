<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class TimeEntryDTO
 * Data Transfer Object for a Time Entry.
 */
class TimeEntryDto
{
    /** @var string Unique ID of the time entry */
    public string $time_entry_id;

    /** @var string Search time entries by project ID */
    public string $project_id;

    /** @var string Name of the project */
    public string $project_name;

    /** @var string Search projects by customer ID */
    public string $customer_id;

    /** @var string Name of the customer */
    public string $customer_name;

    /** @var string ID of the task */
    public string $task_id;

    /** @var string Name of the task */
    public string $task_name;

    /** @var string Search time entries by user ID */
    public string $user_id;

    /** @var string Name of the user */
    public string $user_name;

    /** @var bool Check if the user is the current user */
    public bool $is_current_user;

    /** @var string Date on which the user spent time on the task (format: HH:mm) */
    public string $log_date;

    /** @var string Begin time of the entry */
    public string $begin_time;

    /** @var string End time of the entry */
    public string $end_time;

    /** @var string Total logged time */
    public string $log_time;

    /** @var bool Check if the time entry is billable */
    public bool $is_billable;

    /** @var string Status of the billing */
    public string $billed_status;

    /** @var string ID of the associated invoice */
    public string $invoice_id;

    /** @var string Notes associated with the time entry */
    public string $notes;

    /** @var string When the timer started */
    public string $timer_started_at;

    /** @var string UTC time when the timer started */
    public string $timer_started_at_utc_time;

    /** @var string Duration of the timer in minutes */
    public string $timer_duration_in_minutes;

    /** @var string Duration of the timer in seconds */
    public string $timer_duration_in_seconds;

    /** @var string Created time of the entry */
    public string $created_time;

    /** @var string Custom fields for the timesheet */
    public string $timesheet_custom_fields;

    public function __construct(array $data)
    {
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
}
