import React from 'react';
import {CreateGuesser, EditGuesser, FieldGuesser, InputGuesser, ListGuesser, ShowGuesser} from '@api-platform/admin';
import {TextInput} from 'react-admin';
import {RichTextInput} from 'ra-input-rich-text';
import Work from '@mui/icons-material/Work';

export const JobDescriptionIcon = Work;

export const JobDescriptionList = props => (
    <ListGuesser {...props}>
        <FieldGuesser source="id" />
        <FieldGuesser source="shortDescription" />
    </ListGuesser>
);

export const JobDescriptionEdit = props => (
    <EditGuesser {...props}>
        <TextInput disabled source="id" fullWidth={true}/>
        <TextInput multiline source="shortDescription" fullWidth={true}/>
        <RichTextInput source="jobPurpose" fullWidth={true}/>
        <RichTextInput source="jobDutiesResponsibilities" fullWidth={true}/>
        <RichTextInput source="requiredQualifications" fullWidth={true}/>
        <RichTextInput source="education" fullWidth={true}/>
        <RichTextInput source="experience" fullWidth={true}/>
        <RichTextInput source="knowledge" fullWidth={true}/>
        <RichTextInput source="workingConditions" fullWidth={true}/>
        <RichTextInput source="recruitment" fullWidth={true}/>
        <TextInput multiline source="jobSalary" fullWidth={true}/>
        <TextInput multiline source="comment" fullWidth={true}/>
        <InputGuesser source="schools"/>
        <InputGuesser source="skills"/>
        <InputGuesser source="jobTitles"/>
        <InputGuesser source="ressources"/>
        <InputGuesser source="picture"/>
    </EditGuesser>
);

export const JobDescriptionCreate = props => (
    <CreateGuesser {...props}>
        <TextInput disabled source="id" fullWidth={true}/>
        <TextInput multiline source="shortDescription" fullWidth={true}/>
        <RichTextInput source="jobPurpose" fullWidth={true}/>
        <RichTextInput source="jobDutiesResponsibilities" fullWidth={true}/>
        <RichTextInput source="requiredQualifications" fullWidth={true}/>
        <RichTextInput source="education" fullWidth={true}/>
        <RichTextInput source="experience" fullWidth={true}/>
        <RichTextInput source="knowledge" fullWidth={true}/>
        <RichTextInput source="workingConditions" fullWidth={true}/>
        <RichTextInput source="recruitment" fullWidth={true}/>
        <TextInput multiline source="jobSalary" fullWidth={true}/>
        <TextInput multiline source="comment" fullWidth={true}/>
        <InputGuesser source="schools"/>
        <InputGuesser source="skills"/>
        <InputGuesser source="jobTitles"/>
        <InputGuesser source="ressources"/>
        <InputGuesser source="picture"/>
    </CreateGuesser>
);

export const JobDescriptionShow = props => (
    <ShowGuesser {...props}>
        <FieldGuesser source="id"/>
        <FieldGuesser source="shortDescription" />
    </ShowGuesser>
);