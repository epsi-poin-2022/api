import React from 'react';
import ReactDOM from 'react-dom';
import {OpenApiAdmin, ResourceGuesser} from '@api-platform/admin';

import {SchoolCreate, SchoolList, SchoolEdit, SchoolShow, SchoolIcon} from './schools';

const Admin = () =>
    <OpenApiAdmin docEntrypoint="http://localhost/api/docs.json" entrypoint="http://localhost/api">
        <ResourceGuesser name={"job_descriptions"} />
        <ResourceGuesser name={"job_titles"} />
        <ResourceGuesser name={"pictures"} />
        <ResourceGuesser name={"ressources"} />
        <ResourceGuesser name={"schools"} list={SchoolList} edit={SchoolEdit} create={SchoolCreate} show={SchoolShow} icon={SchoolIcon}/>
        <ResourceGuesser name={"skills"} />
    </OpenApiAdmin>;

ReactDOM.render(<Admin />, document.getElementById('api-platform-admin'));
