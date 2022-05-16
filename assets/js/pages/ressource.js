import React from 'react';
import {CreateGuesser, EditGuesser, FieldGuesser, InputGuesser, ListGuesser, ShowGuesser} from '@api-platform/admin';
import AttachFile from '@mui/icons-material/AttachFile';

export const RessourceIcon = AttachFile;

export const RessourceList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source={"id"} />
        <FieldGuesser source={"label"} />
    </ListGuesser>
);

export const RessourceEdit = props => (
    <EditGuesser {...props}>
        <InputGuesser source="id" />
        <InputGuesser source="label" />
        <InputGuesser source="link" />
    </EditGuesser>
);

export const RessourceCreate = props => (
    <CreateGuesser {...props}>
        <InputGuesser source="id" />
        <InputGuesser source="label" />
        <InputGuesser source="link" />
    </CreateGuesser>
);

export const RessourceShow = props => (
    <ShowGuesser {...props}>
        <FieldGuesser source="id" />
        <FieldGuesser source="label" />
        <FieldGuesser source="link" />
    </ShowGuesser>
);