<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection, WithHeadings
{
    protected $userIds;

    public function __construct(array $userIds)
    {
        $this->userIds = $userIds;
    }

    public function collection()
    {
        return User::with([
            'country',
            'city'
        ])->whereIn('id', $this->userIds)
            ->get(['name', 'email', 'website', 'phone']);
    }

    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'website',
            'phone',
            // Add more columns as needed
        ];
    }
}

