import React from 'react';
import {CreateGuesser, EditGuesser, FieldGuesser, InputGuesser, ListGuesser, ShowGuesser} from '@api-platform/admin';
import School from '@mui/icons-material/School';

export const SchoolIcon = School;

export const SchoolList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source={"id"} />
        <FieldGuesser source={"name"} />
        <FieldGuesser source={"website"} />
        <FieldGuesser source={"logo"} />
    </ListGuesser>
);

export const SchoolEdit = props => (
    <EditGuesser {...props}>
        <InputGuesser source="id" />
        <InputGuesser source="name" />
        <InputGuesser source="website" />
        <InputGuesser source="logo" />
    </EditGuesser>
);

export const SchoolCreate = props => (
    <CreateGuesser {...props}>
        <InputGuesser source="id" />
        <InputGuesser source="name" />
        <InputGuesser source="website" />
        <InputGuesser source="logo" />
    </CreateGuesser>
);

export const SchoolShow = props => (
    <ShowGuesser {...props}>
        <FieldGuesser source="id" />
        <FieldGuesser source="name" />
        <FieldGuesser source="website" />
        <FieldGuesser source="logo" />
    </ShowGuesser>
);