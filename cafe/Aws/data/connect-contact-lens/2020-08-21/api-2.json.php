<?php
// This file was auto-generated from sdk-root/src/data/connect-contact-lens/2020-08-21/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2020-08-21', 'endpointPrefix' => 'contact-lens', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'protocols' => [ 'rest-json', ], 'serviceAbbreviation' => 'Amazon Connect Contact Lens', 'serviceFullName' => 'Amazon Connect Contact Lens', 'serviceId' => 'Connect Contact Lens', 'signatureVersion' => 'v4', 'signingName' => 'connect', 'uid' => 'connect-contact-lens-2020-08-21', 'auth' => [ 'aws.auth#sigv4', ], ], 'operations' => [ 'ListRealtimeContactAnalysisSegments' => [ 'name' => 'ListRealtimeContactAnalysisSegments', 'http' => [ 'method' => 'POST', 'requestUri' => '/realtime-contact-analysis/analysis-segments', ], 'input' => [ 'shape' => 'ListRealtimeContactAnalysisSegmentsRequest', ], 'output' => [ 'shape' => 'ListRealtimeContactAnalysisSegmentsResponse', ], 'errors' => [ [ 'shape' => 'InvalidRequestException', ], [ 'shape' => 'AccessDeniedException', ], [ 'shape' => 'ResourceNotFoundException', ], [ 'shape' => 'InternalServiceException', ], [ 'shape' => 'ThrottlingException', ], ], ], ], 'shapes' => [ 'AccessDeniedException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 403, ], 'exception' => true, ], 'Categories' => [ 'type' => 'structure', 'required' => [ 'MatchedCategories', 'MatchedDetails', ], 'members' => [ 'MatchedCategories' => [ 'shape' => 'MatchedCategories', ], 'MatchedDetails' => [ 'shape' => 'MatchedDetails', ], ], ], 'CategoryDetails' => [ 'type' => 'structure', 'required' => [ 'PointsOfInterest', ], 'members' => [ 'PointsOfInterest' => [ 'shape' => 'PointsOfInterest', ], ], ], 'CategoryName' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '.*\\S.*', ], 'CharacterOffset' => [ 'type' => 'integer', 'min' => 0, ], 'CharacterOffsets' => [ 'type' => 'structure', 'required' => [ 'BeginOffsetChar', 'EndOffsetChar', ], 'members' => [ 'BeginOffsetChar' => [ 'shape' => 'CharacterOffset', ], 'EndOffsetChar' => [ 'shape' => 'CharacterOffset', ], ], ], 'ContactId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '.*\\S.*', ], 'InstanceId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '.*\\S.*', ], 'InternalServiceException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'InvalidRequestException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'IssueDetected' => [ 'type' => 'structure', 'required' => [ 'CharacterOffsets', ], 'members' => [ 'CharacterOffsets' => [ 'shape' => 'CharacterOffsets', ], ], ], 'IssuesDetected' => [ 'type' => 'list', 'member' => [ 'shape' => 'IssueDetected', ], 'max' => 20, 'min' => 0, ], 'ListRealtimeContactAnalysisSegmentsRequest' => [ 'type' => 'structure', 'required' => [ 'InstanceId', 'ContactId', ], 'members' => [ 'InstanceId' => [ 'shape' => 'InstanceId', ], 'ContactId' => [ 'shape' => 'ContactId', ], 'MaxResults' => [ 'shape' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListRealtimeContactAnalysisSegmentsResponse' => [ 'type' => 'structure', 'required' => [ 'Segments', ], 'members' => [ 'Segments' => [ 'shape' => 'RealtimeContactAnalysisSegments', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'MatchedCategories' => [ 'type' => 'list', 'member' => [ 'shape' => 'CategoryName', ], 'max' => 150, 'min' => 0, ], 'MatchedDetails' => [ 'type' => 'map', 'key' => [ 'shape' => 'CategoryName', ], 'value' => [ 'shape' => 'CategoryDetails', ], 'max' => 150, 'min' => 0, ], 'MaxResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'Message' => [ 'type' => 'string', ], 'NextToken' => [ 'type' => 'string', 'max' => 131070, 'min' => 1, 'pattern' => '.*\\S.*', ], 'OffsetMillis' => [ 'type' => 'integer', 'min' => 0, ], 'ParticipantId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '.*\\S.*', ], 'ParticipantRole' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '.*\\S.*', ], 'PointOfInterest' => [ 'type' => 'structure', 'required' => [ 'BeginOffsetMillis', 'EndOffsetMillis', ], 'members' => [ 'BeginOffsetMillis' => [ 'shape' => 'OffsetMillis', ], 'EndOffsetMillis' => [ 'shape' => 'OffsetMillis', ], ], ], 'PointsOfInterest' => [ 'type' => 'list', 'member' => [ 'shape' => 'PointOfInterest', ], 'max' => 20, 'min' => 0, ], 'PostContactSummary' => [ 'type' => 'structure', 'required' => [ 'Status', ], 'members' => [ 'Content' => [ 'shape' => 'PostContactSummaryContent', ], 'Status' => [ 'shape' => 'PostContactSummaryStatus', ], 'FailureCode' => [ 'shape' => 'PostContactSummaryFailureCode', ], ], ], 'PostContactSummaryContent' => [ 'type' => 'string', 'max' => 1762, 'min' => 1, ], 'PostContactSummaryFailureCode' => [ 'type' => 'string', 'enum' => [ 'QUOTA_EXCEEDED', 'INSUFFICIENT_CONVERSATION_CONTENT', 'FAILED_SAFETY_GUIDELINES', 'INVALID_ANALYSIS_CONFIGURATION', 'INTERNAL_ERROR', ], ], 'PostContactSummaryStatus' => [ 'type' => 'string', 'enum' => [ 'FAILED', 'COMPLETED', ], ], 'RealtimeContactAnalysisSegment' => [ 'type' => 'structure', 'members' => [ 'Transcript' => [ 'shape' => 'Transcript', ], 'Categories' => [ 'shape' => 'Categories', ], 'PostContactSummary' => [ 'shape' => 'PostContactSummary', ], ], ], 'RealtimeContactAnalysisSegments' => [ 'type' => 'list', 'member' => [ 'shape' => 'RealtimeContactAnalysisSegment', ], 'max' => 100, 'min' => 0, ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'SentimentValue' => [ 'type' => 'string', 'enum' => [ 'POSITIVE', 'NEUTRAL', 'NEGATIVE', ], ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'Message', ], 'members' => [ 'Message' => [ 'shape' => 'Message', ], ], 'error' => [ 'httpStatusCode' => 429, ], 'exception' => true, ], 'Transcript' => [ 'type' => 'structure', 'required' => [ 'Id', 'ParticipantId', 'ParticipantRole', 'Content', 'BeginOffsetMillis', 'EndOffsetMillis', ], 'members' => [ 'Id' => [ 'shape' => 'TranscriptId', ], 'ParticipantId' => [ 'shape' => 'ParticipantId', ], 'ParticipantRole' => [ 'shape' => 'ParticipantRole', ], 'Content' => [ 'shape' => 'TranscriptContent', ], 'BeginOffsetMillis' => [ 'shape' => 'OffsetMillis', ], 'EndOffsetMillis' => [ 'shape' => 'OffsetMillis', ], 'Sentiment' => [ 'shape' => 'SentimentValue', ], 'IssuesDetected' => [ 'shape' => 'IssuesDetected', ], ], ], 'TranscriptContent' => [ 'type' => 'string', 'min' => 1, 'pattern' => '.*\\S.*', ], 'TranscriptId' => [ 'type' => 'string', 'max' => 256, 'min' => 1, 'pattern' => '.*\\S.*', ], ],];
