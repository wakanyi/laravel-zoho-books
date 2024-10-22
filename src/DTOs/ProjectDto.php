<?php

namespace Sumer5020\ZohoBooks\DTOs;

/**
 * Class ProjectDto
 * Data Transfer Object for a Project.
 */
class ProjectDto
{
    /** @var array Inputs data */
    private array $_data;

    /** @var string ID of the project */
     private string $project_id;

    /** @var string Name of the project. Max-length [100] */
     private string $project_name;

    /** @var string Search projects by customer id */
     private string $customer_id;

    /** @var string Name of the customer */
     private string $customer_name;

    /** @var string Currency code associated with the project */
     private string $currency_code;

    /** @var string Description of the project */
     private string $description;

    /** @var string Status of the project */
     private string $status;

    /** @var string Billing type. Allowed values: fixed_cost_for_project, based_on_project_hours, based_on_staff_hours, based_on_task_hours */
     private string $billing_type;

    /** @var float Rate associated with the project */
     private float $rate;

    /** @var string Type of budget for the project */
     private string $budget_type;

    /** @var string Total hours allocated for the project */
     private string $total_hours;

    /** @var float Total amount for the project */
     private float $total_amount;

    /** @var string Billed hours for the project */
     private string $billed_hours;

    /** @var float Billed amount for the project */
     private float $billed_amount;

    /** @var string Unbilled hours for the project */
     private string $un_billed_hours;

    /** @var float Unbilled amount for the project */
     private float $un_billed_amount;

    /** @var string Billable hours for the project */
     private string $billable_hours;

    /** @var float Billable amount for the project */
     private float $billable_amount;

    /** @var string Non-billable hours for the project */
     private string $non_billable_hours;

    /** @var float Non-billable amount for the project */
     private float $non_billable_amount;

    /** @var float Budgeted cost to complete this project */
     private float $cost_budget_amount;

    /** @var bool Check if recurrence is associated with the project */
     private bool $is_recurrence_associated;

    /** @var array Recurring invoices associated with the project */
     private array $recurring_invoices;

    /** @var string Created time of the project */
     private string $created_time;

    /** @var bool Show in dashboard */
     private bool $show_in_dashboard;

    /** @var array Tasks associated with the project */
     private array $tasks;

    /** @var array Users associated with the project */
     private array $users;

    /**
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->_data = array_keys($data);

        $this->project_id = $data['project_id'] ?? '';
        $this->project_name = $data['project_name'] ?? '';
        $this->customer_id = $data['customer_id'] ?? '';
        $this->customer_name = $data['customer_name'] ?? '';
        $this->currency_code = $data['currency_code'] ?? '';
        $this->description = $data['description'] ?? '';
        $this->status = $data['status'] ?? '';
        $this->billing_type = $data['billing_type'] ?? '';
        $this->rate = $data['rate'] ?? 0.0;
        $this->budget_type = $data['budget_type'] ?? '';
        $this->total_hours = $data['total_hours'] ?? '';
        $this->total_amount = $data['total_amount'] ?? 0.0;
        $this->billed_hours = $data['billed_hours'] ?? '';
        $this->billed_amount = $data['billed_amount'] ?? 0.0;
        $this->un_billed_hours = $data['un_billed_hours'] ?? '';
        $this->un_billed_amount = $data['un_billed_amount'] ?? 0.0;
        $this->billable_hours = $data['billable_hours'] ?? '';
        $this->billable_amount = $data['billable_amount'] ?? 0.0;
        $this->non_billable_hours = $data['non_billable_hours'] ?? '';
        $this->non_billable_amount = $data['non_billable_amount'] ?? 0.0;
        $this->cost_budget_amount = $data['cost_budget_amount'] ?? 0.0;
        $this->is_recurrence_associated = $data['is_recurrence_associated'] ?? false;
        $this->recurring_invoices = $data['recurring_invoices'] ?? [];
        $this->created_time = $data['created_time'] ?? '';
        $this->show_in_dashboard = $data['show_in_dashboard'] ?? false;
        $this->tasks = $data['tasks'] ?? [];
        $this->users = $data['users'] ?? [];
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
