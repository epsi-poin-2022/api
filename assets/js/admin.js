import React from 'react';
import ReactDOM from 'react-dom';
import {
    OpenApiAdmin,
    ResourceGuesser,
} from '@api-platform/admin';
import {ENTRYPOINT, DOC_ENTRYPOINT} from './config/entrypoint';

import {SchoolCreate, SchoolEdit, SchoolIcon, SchoolList,SchoolShow} from './pages/school';
import {SkillCreate, SkillEdit, SkillIcon, SkillList, SkillShow} from "./pages/skill";
import {JobTitleCreate, JobTitleEdit, JobTitleIcon, JobTitleList, JobTitleShow} from "./pages/jobTitle";
import {RessourceCreate, RessourceEdit, RessourceIcon, RessourceList, RessourceShow} from "./pages/ressource";
import {JobDescriptionCreate, JobDescriptionEdit, JobDescriptionIcon, JobDescriptionList, JobDescriptionShow} from "./pages/jobDescription";
import {PictureCreate, PictureEdit, PictureIcon, PictureList, PictureShow} from "./pages/picture";

const Admin = () =>
    <OpenApiAdmin
        docEntrypoint={DOC_ENTRYPOINT}
        entrypoint={ENTRYPOINT}
    >
        <ResourceGuesser name={"job_descriptions"} list={JobDescriptionList} edit={JobDescriptionEdit} create={JobDescriptionCreate} show={JobDescriptionShow} icon={JobDescriptionIcon}/>
        <ResourceGuesser name={"job_titles"}  list={JobTitleList} edit={JobTitleEdit} create={JobTitleCreate} show={JobTitleShow} icon={JobTitleIcon}/>
        <ResourceGuesser name={"pictures"}  list={PictureList} edit={PictureEdit} create={PictureCreate} show={PictureShow} icon={PictureIcon}/>
        <ResourceGuesser name={"ressources"} list={RessourceList} edit={RessourceEdit} create={RessourceCreate} show={RessourceShow} icon={RessourceIcon}/>
        <ResourceGuesser name={"schools"} list={SchoolList} edit={SchoolEdit} create={SchoolCreate} show={SchoolShow} icon={SchoolIcon}/>
        <ResourceGuesser name={"skills"} list={SkillList} edit={SkillEdit} create={SkillCreate} show={SkillShow} icon={SkillIcon}/>
    </OpenApiAdmin>;

ReactDOM.render(<Admin />, document.getElementById('api-platform-admin'));
