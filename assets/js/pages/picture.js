import React from 'react';
import {CreateGuesser, EditGuesser, FieldGuesser, ListGuesser, ShowGuesser} from '@api-platform/admin';
import {FileInput, FileField, ImageField} from 'react-admin';
import Image from '@mui/icons-material/Image';

export const PictureIcon = Image;

export const PictureList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source="id" />
        <FieldGuesser source="file" />
    </ListGuesser>
);

export const PictureEdit = props => (
    <EditGuesser {...props}>
        <FileInput source="file">
            <FileField source="filePath" title="file" />
        </FileInput>
    </EditGuesser>
);

export const PictureCreate = props => (
    <CreateGuesser {...props}>
        <FileInput source="file">
            <FileField source="filePath" title="file" />
        </FileInput>
    </CreateGuesser>
);

export const PictureShow = props => (
    <ShowGuesser {...props}>
        <ImageField source="filePath" title="file" />
    </ShowGuesser>
);