import React from 'react';
import {CreateGuesser, EditGuesser, FieldGuesser, InputGuesser, ListGuesser, ShowGuesser} from '@api-platform/admin';
import Title from '@mui/icons-material/Title';

export const JobTitleIcon = Title;

export const JobTitleList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source={"id"} />
        <FieldGuesser source={"label"} />
    </ListGuesser>
);

export const JobTitleEdit = props => (
    <EditGuesser {...props}>
        <InputGuesser source="id" />
        <InputGuesser source="label" />
        <InputGuesser source="isDefault" />
    </EditGuesser>
);

export const JobTitleCreate = props => (
    <CreateGuesser {...props}>
        <InputGuesser source="id" />
        <InputGuesser source="label" />
        <InputGuesser source="isDefault" />
    </CreateGuesser>
);

export const JobTitleShow = props => (
    <ShowGuesser {...props}>
        <FieldGuesser source="id" />
        <FieldGuesser source="label" />
        <FieldGuesser source="isDefault" />
    </ShowGuesser>
);