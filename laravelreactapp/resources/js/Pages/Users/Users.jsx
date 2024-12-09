import Table from '@/Components/Table';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';
import React from 'react';

function Users({ user, users }) {

    console.log(user);

    return (
        <AuthenticatedLayout
            header={
                <h2 className="text-xl font-semibold leading-tight text-gray-800">
                    User Management
                </h2>
            }
        >

            <Head title='User Management' />

            <section>
                <main>
                    <div className="overflow-x-auto p-10">
                        <Table users={users} />
                    </div>
                </main>
            </section>
        </AuthenticatedLayout>
    )
}

export default Users;




