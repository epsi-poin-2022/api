import React from 'react';
import {CreateGuesser, EditGuesser, FieldGuesser, InputGuesser, ListGuesser, ShowGuesser} from '@api-platform/admin';
import Psychology from '@mui/icons-material/Psychology';

export const SkillIcon = Psychology;

export const SkillList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source={"id"} />
        <FieldGuesser source={"name"} />
    </ListGuesser>
);

export const SkillEdit = props => (
    <EditGuesser {...props}>
        <InputGuesser disabled source="id" fullWidth={true}/>
        <InputGuesser source="name" fullWidth={true}/>
        <InputGuesser source="question" fullWidth={true}/>
    </EditGuesser>
);

export const SkillCreate = props => (
    <CreateGuesser {...props}>
        <InputGuesser disabled source="id" fullWidth={true}/>
        <InputGuesser source="name" fullWidth={true}/>
        <InputGuesser source="question" fullWidth={true}/>
    </CreateGuesser>
);

export const SkillShow = props => (
    <ShowGuesser {...props}>
        <FieldGuesser source="id" fullWidth={true}/>
        <FieldGuesser source="name" fullWidth={true}/>
        <FieldGuesser source="question" fullWidth={true}/>
    </ShowGuesser>
);