<?php

/* This file is auto-generated. Don't edit directly! */

namespace Jsor\Doctrine\PostGIS\Functions;

use Doctrine\ORM\Configuration;

class Configurator
{
    public static function configure(Configuration $configuration)
    {
        $configuration->addCustomStringFunction('Geometry', 'Jsor\Doctrine\PostGIS\Functions\Geometry');
        $configuration->addCustomStringFunction('Geography', 'Jsor\Doctrine\PostGIS\Functions\Geography');
        $configuration->addCustomStringFunction('ST_Box2dFromGeoHash', 'Jsor\Doctrine\PostGIS\Functions\ST_Box2dFromGeoHash');
        $configuration->addCustomStringFunction('ST_GeogFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_GeogFromText');
        $configuration->addCustomStringFunction('ST_GeographyFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_GeographyFromText');
        $configuration->addCustomStringFunction('ST_GeogFromWKB', 'Jsor\Doctrine\PostGIS\Functions\ST_GeogFromWKB');
        $configuration->addCustomStringFunction('ST_GeomCollFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomCollFromText');
        $configuration->addCustomStringFunction('ST_GeomFromEWKB', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromEWKB');
        $configuration->addCustomStringFunction('ST_GeomFromEWKT', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromEWKT');
        $configuration->addCustomStringFunction('ST_GeomFromGeoHash', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromGeoHash');
        $configuration->addCustomStringFunction('ST_GeomFromGML', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromGML');
        $configuration->addCustomStringFunction('ST_GeomFromGeoJSON', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromGeoJSON');
        $configuration->addCustomStringFunction('ST_GeomFromKML', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromKML');
        $configuration->addCustomStringFunction('ST_GeomFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromText');
        $configuration->addCustomStringFunction('ST_GeometryFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_GeometryFromText');
        $configuration->addCustomStringFunction('ST_GeomFromWKB', 'Jsor\Doctrine\PostGIS\Functions\ST_GeomFromWKB');
        $configuration->addCustomStringFunction('ST_LineFromMultiPoint', 'Jsor\Doctrine\PostGIS\Functions\ST_LineFromMultiPoint');
        $configuration->addCustomStringFunction('ST_LineFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_LineFromText');
        $configuration->addCustomStringFunction('ST_LineFromWKB', 'Jsor\Doctrine\PostGIS\Functions\ST_LineFromWKB');
        $configuration->addCustomStringFunction('ST_LinestringFromWKB', 'Jsor\Doctrine\PostGIS\Functions\ST_LinestringFromWKB');
        $configuration->addCustomStringFunction('ST_MakeBox2D', 'Jsor\Doctrine\PostGIS\Functions\ST_MakeBox2D');
        $configuration->addCustomStringFunction('ST_3DMakeBox', 'Jsor\Doctrine\PostGIS\Functions\ST_3DMakeBox');
        $configuration->addCustomStringFunction('ST_MakeBox3D', 'Jsor\Doctrine\PostGIS\Functions\ST_MakeBox3D');
        $configuration->addCustomStringFunction('ST_MakeLine', 'Jsor\Doctrine\PostGIS\Functions\ST_MakeLine');
        $configuration->addCustomStringFunction('ST_MakeEnvelope', 'Jsor\Doctrine\PostGIS\Functions\ST_MakeEnvelope');
        $configuration->addCustomStringFunction('ST_MakePolygon', 'Jsor\Doctrine\PostGIS\Functions\ST_MakePolygon');
        $configuration->addCustomStringFunction('ST_MakePoint', 'Jsor\Doctrine\PostGIS\Functions\ST_MakePoint');
        $configuration->addCustomStringFunction('ST_MakePointM', 'Jsor\Doctrine\PostGIS\Functions\ST_MakePointM');
        $configuration->addCustomStringFunction('ST_MLineFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_MLineFromText');
        $configuration->addCustomStringFunction('ST_MPointFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_MPointFromText');
        $configuration->addCustomStringFunction('ST_MPolyFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_MPolyFromText');
        $configuration->addCustomStringFunction('ST_Point', 'Jsor\Doctrine\PostGIS\Functions\ST_Point');
        $configuration->addCustomStringFunction('ST_PointFromGeoHash', 'Jsor\Doctrine\PostGIS\Functions\ST_PointFromGeoHash');
        $configuration->addCustomStringFunction('ST_PointFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_PointFromText');
        $configuration->addCustomStringFunction('ST_PointFromWKB', 'Jsor\Doctrine\PostGIS\Functions\ST_PointFromWKB');
        $configuration->addCustomStringFunction('ST_Polygon', 'Jsor\Doctrine\PostGIS\Functions\ST_Polygon');
        $configuration->addCustomStringFunction('ST_PolygonFromText', 'Jsor\Doctrine\PostGIS\Functions\ST_PolygonFromText');
        $configuration->addCustomStringFunction('GeometryType', 'Jsor\Doctrine\PostGIS\Functions\GeometryType');
        $configuration->addCustomStringFunction('ST_Boundary', 'Jsor\Doctrine\PostGIS\Functions\ST_Boundary');
        $configuration->addCustomNumericFunction('ST_CoordDim', 'Jsor\Doctrine\PostGIS\Functions\ST_CoordDim');
        $configuration->addCustomNumericFunction('ST_Dimension', 'Jsor\Doctrine\PostGIS\Functions\ST_Dimension');
        $configuration->addCustomStringFunction('ST_EndPoint', 'Jsor\Doctrine\PostGIS\Functions\ST_EndPoint');
        $configuration->addCustomStringFunction('ST_Envelope', 'Jsor\Doctrine\PostGIS\Functions\ST_Envelope');
        $configuration->addCustomStringFunction('ST_ExteriorRing', 'Jsor\Doctrine\PostGIS\Functions\ST_ExteriorRing');
        $configuration->addCustomStringFunction('ST_GeometryN', 'Jsor\Doctrine\PostGIS\Functions\ST_GeometryN');
        $configuration->addCustomStringFunction('ST_GeometryType', 'Jsor\Doctrine\PostGIS\Functions\ST_GeometryType');
        $configuration->addCustomStringFunction('ST_InteriorRingN', 'Jsor\Doctrine\PostGIS\Functions\ST_InteriorRingN');
        $configuration->addCustomStringFunction('ST_IsClosed', 'Jsor\Doctrine\PostGIS\Functions\ST_IsClosed');
        $configuration->addCustomStringFunction('ST_IsCollection', 'Jsor\Doctrine\PostGIS\Functions\ST_IsCollection');
        $configuration->addCustomStringFunction('ST_IsEmpty', 'Jsor\Doctrine\PostGIS\Functions\ST_IsEmpty');
        $configuration->addCustomStringFunction('ST_IsRing', 'Jsor\Doctrine\PostGIS\Functions\ST_IsRing');
        $configuration->addCustomStringFunction('ST_IsSimple', 'Jsor\Doctrine\PostGIS\Functions\ST_IsSimple');
        $configuration->addCustomStringFunction('ST_IsValid', 'Jsor\Doctrine\PostGIS\Functions\ST_IsValid');
        $configuration->addCustomStringFunction('ST_IsValidReason', 'Jsor\Doctrine\PostGIS\Functions\ST_IsValidReason');
        $configuration->addCustomStringFunction('ST_IsValidDetail', 'Jsor\Doctrine\PostGIS\Functions\ST_IsValidDetail');
        $configuration->addCustomNumericFunction('ST_M', 'Jsor\Doctrine\PostGIS\Functions\ST_M');
        $configuration->addCustomNumericFunction('ST_NDims', 'Jsor\Doctrine\PostGIS\Functions\ST_NDims');
        $configuration->addCustomNumericFunction('ST_NPoints', 'Jsor\Doctrine\PostGIS\Functions\ST_NPoints');
        $configuration->addCustomNumericFunction('ST_NRings', 'Jsor\Doctrine\PostGIS\Functions\ST_NRings');
        $configuration->addCustomNumericFunction('ST_NumGeometries', 'Jsor\Doctrine\PostGIS\Functions\ST_NumGeometries');
        $configuration->addCustomNumericFunction('ST_NumInteriorRings', 'Jsor\Doctrine\PostGIS\Functions\ST_NumInteriorRings');
        $configuration->addCustomNumericFunction('ST_NumInteriorRing', 'Jsor\Doctrine\PostGIS\Functions\ST_NumInteriorRing');
        $configuration->addCustomNumericFunction('ST_NumPatches', 'Jsor\Doctrine\PostGIS\Functions\ST_NumPatches');
        $configuration->addCustomNumericFunction('ST_NumPoints', 'Jsor\Doctrine\PostGIS\Functions\ST_NumPoints');
        $configuration->addCustomStringFunction('ST_PatchN', 'Jsor\Doctrine\PostGIS\Functions\ST_PatchN');
        $configuration->addCustomStringFunction('ST_PointN', 'Jsor\Doctrine\PostGIS\Functions\ST_PointN');
        $configuration->addCustomNumericFunction('ST_SRID', 'Jsor\Doctrine\PostGIS\Functions\ST_SRID');
        $configuration->addCustomStringFunction('ST_StartPoint', 'Jsor\Doctrine\PostGIS\Functions\ST_StartPoint');
        $configuration->addCustomStringFunction('ST_Summary', 'Jsor\Doctrine\PostGIS\Functions\ST_Summary');
        $configuration->addCustomNumericFunction('ST_X', 'Jsor\Doctrine\PostGIS\Functions\ST_X');
        $configuration->addCustomNumericFunction('ST_XMax', 'Jsor\Doctrine\PostGIS\Functions\ST_XMax');
        $configuration->addCustomNumericFunction('ST_XMin', 'Jsor\Doctrine\PostGIS\Functions\ST_XMin');
        $configuration->addCustomNumericFunction('ST_Y', 'Jsor\Doctrine\PostGIS\Functions\ST_Y');
        $configuration->addCustomNumericFunction('ST_YMax', 'Jsor\Doctrine\PostGIS\Functions\ST_YMax');
        $configuration->addCustomNumericFunction('ST_YMin', 'Jsor\Doctrine\PostGIS\Functions\ST_YMin');
        $configuration->addCustomNumericFunction('ST_Z', 'Jsor\Doctrine\PostGIS\Functions\ST_Z');
        $configuration->addCustomNumericFunction('ST_ZMax', 'Jsor\Doctrine\PostGIS\Functions\ST_ZMax');
        $configuration->addCustomNumericFunction('ST_Zmflag', 'Jsor\Doctrine\PostGIS\Functions\ST_Zmflag');
        $configuration->addCustomNumericFunction('ST_ZMin', 'Jsor\Doctrine\PostGIS\Functions\ST_ZMin');
        $configuration->addCustomStringFunction('ST_AddPoint', 'Jsor\Doctrine\PostGIS\Functions\ST_AddPoint');
        $configuration->addCustomStringFunction('ST_Multi', 'Jsor\Doctrine\PostGIS\Functions\ST_Multi');
        $configuration->addCustomStringFunction('ST_Scale', 'Jsor\Doctrine\PostGIS\Functions\ST_Scale');
        $configuration->addCustomStringFunction('ST_SetSRID', 'Jsor\Doctrine\PostGIS\Functions\ST_SetSRID');
        $configuration->addCustomStringFunction('ST_SnapToGrid', 'Jsor\Doctrine\PostGIS\Functions\ST_SnapToGrid');
        $configuration->addCustomStringFunction('ST_Transform', 'Jsor\Doctrine\PostGIS\Functions\ST_Transform');
        $configuration->addCustomStringFunction('ST_Translate', 'Jsor\Doctrine\PostGIS\Functions\ST_Translate');
        $configuration->addCustomStringFunction('ST_TransScale', 'Jsor\Doctrine\PostGIS\Functions\ST_TransScale');
        $configuration->addCustomStringFunction('ST_AsBinary', 'Jsor\Doctrine\PostGIS\Functions\ST_AsBinary');
        $configuration->addCustomStringFunction('ST_AsEWKB', 'Jsor\Doctrine\PostGIS\Functions\ST_AsEWKB');
        $configuration->addCustomStringFunction('ST_AsEWKT', 'Jsor\Doctrine\PostGIS\Functions\ST_AsEWKT');
        $configuration->addCustomStringFunction('ST_AsGeoJSON', 'Jsor\Doctrine\PostGIS\Functions\ST_AsGeoJSON');
        $configuration->addCustomStringFunction('ST_AsGML', 'Jsor\Doctrine\PostGIS\Functions\ST_AsGML');
        $configuration->addCustomStringFunction('ST_AsHEXEWKB', 'Jsor\Doctrine\PostGIS\Functions\ST_AsHEXEWKB');
        $configuration->addCustomStringFunction('ST_AsKML', 'Jsor\Doctrine\PostGIS\Functions\ST_AsKML');
        $configuration->addCustomStringFunction('ST_AsSVG', 'Jsor\Doctrine\PostGIS\Functions\ST_AsSVG');
        $configuration->addCustomStringFunction('ST_GeoHash', 'Jsor\Doctrine\PostGIS\Functions\ST_GeoHash');
        $configuration->addCustomStringFunction('ST_AsLatLonText', 'Jsor\Doctrine\PostGIS\Functions\ST_AsLatLonText');
        $configuration->addCustomStringFunction('ST_AsText', 'Jsor\Doctrine\PostGIS\Functions\ST_AsText');
        $configuration->addCustomStringFunction('ST_3DClosestPoint', 'Jsor\Doctrine\PostGIS\Functions\ST_3DClosestPoint');
        $configuration->addCustomNumericFunction('ST_3DDistance', 'Jsor\Doctrine\PostGIS\Functions\ST_3DDistance');
        $configuration->addCustomStringFunction('ST_3DDWithin', 'Jsor\Doctrine\PostGIS\Functions\ST_3DDWithin');
        $configuration->addCustomStringFunction('ST_3DDFullyWithin', 'Jsor\Doctrine\PostGIS\Functions\ST_3DDFullyWithin');
        $configuration->addCustomStringFunction('ST_3DIntersects', 'Jsor\Doctrine\PostGIS\Functions\ST_3DIntersects');
        $configuration->addCustomStringFunction('ST_3DLongestLine', 'Jsor\Doctrine\PostGIS\Functions\ST_3DLongestLine');
        $configuration->addCustomNumericFunction('ST_3DMaxDistance', 'Jsor\Doctrine\PostGIS\Functions\ST_3DMaxDistance');
        $configuration->addCustomStringFunction('ST_3DShortestLine', 'Jsor\Doctrine\PostGIS\Functions\ST_3DShortestLine');
        $configuration->addCustomNumericFunction('ST_Area', 'Jsor\Doctrine\PostGIS\Functions\ST_Area');
        $configuration->addCustomNumericFunction('ST_Azimuth', 'Jsor\Doctrine\PostGIS\Functions\ST_Azimuth');
        $configuration->addCustomStringFunction('ST_Centroid', 'Jsor\Doctrine\PostGIS\Functions\ST_Centroid');
        $configuration->addCustomStringFunction('ST_ClosestPoint', 'Jsor\Doctrine\PostGIS\Functions\ST_ClosestPoint');
        $configuration->addCustomStringFunction('ST_Contains', 'Jsor\Doctrine\PostGIS\Functions\ST_Contains');
        $configuration->addCustomStringFunction('ST_ContainsProperly', 'Jsor\Doctrine\PostGIS\Functions\ST_ContainsProperly');
        $configuration->addCustomStringFunction('ST_Covers', 'Jsor\Doctrine\PostGIS\Functions\ST_Covers');
        $configuration->addCustomStringFunction('ST_CoveredBy', 'Jsor\Doctrine\PostGIS\Functions\ST_CoveredBy');
        $configuration->addCustomStringFunction('ST_Crosses', 'Jsor\Doctrine\PostGIS\Functions\ST_Crosses');
        $configuration->addCustomNumericFunction('ST_LineCrossingDirection', 'Jsor\Doctrine\PostGIS\Functions\ST_LineCrossingDirection');
        $configuration->addCustomStringFunction('ST_Disjoint', 'Jsor\Doctrine\PostGIS\Functions\ST_Disjoint');
        $configuration->addCustomNumericFunction('ST_Distance', 'Jsor\Doctrine\PostGIS\Functions\ST_Distance');
        $configuration->addCustomNumericFunction('ST_HausdorffDistance', 'Jsor\Doctrine\PostGIS\Functions\ST_HausdorffDistance');
        $configuration->addCustomNumericFunction('ST_MaxDistance', 'Jsor\Doctrine\PostGIS\Functions\ST_MaxDistance');
        $configuration->addCustomNumericFunction('ST_Distance_Sphere', 'Jsor\Doctrine\PostGIS\Functions\ST_Distance_Sphere');
        $configuration->addCustomNumericFunction('ST_Distance_Spheroid', 'Jsor\Doctrine\PostGIS\Functions\ST_Distance_Spheroid');
        $configuration->addCustomStringFunction('ST_DFullyWithin', 'Jsor\Doctrine\PostGIS\Functions\ST_DFullyWithin');
        $configuration->addCustomStringFunction('ST_DWithin', 'Jsor\Doctrine\PostGIS\Functions\ST_DWithin');
        $configuration->addCustomStringFunction('ST_Equals', 'Jsor\Doctrine\PostGIS\Functions\ST_Equals');
        $configuration->addCustomStringFunction('ST_HasArc', 'Jsor\Doctrine\PostGIS\Functions\ST_HasArc');
        $configuration->addCustomStringFunction('ST_Intersects', 'Jsor\Doctrine\PostGIS\Functions\ST_Intersects');
        $configuration->addCustomNumericFunction('ST_Length', 'Jsor\Doctrine\PostGIS\Functions\ST_Length');
        $configuration->addCustomNumericFunction('ST_3DLength', 'Jsor\Doctrine\PostGIS\Functions\ST_3DLength');
        $configuration->addCustomNumericFunction('ST_Length3D', 'Jsor\Doctrine\PostGIS\Functions\ST_Length3D');
        $configuration->addCustomNumericFunction('ST_Length_Spheroid', 'Jsor\Doctrine\PostGIS\Functions\ST_Length_Spheroid');
        $configuration->addCustomNumericFunction('ST_Length2D_Spheroid', 'Jsor\Doctrine\PostGIS\Functions\ST_Length2D_Spheroid');
        $configuration->addCustomStringFunction('ST_LongestLine', 'Jsor\Doctrine\PostGIS\Functions\ST_LongestLine');
        $configuration->addCustomStringFunction('ST_OrderingEquals', 'Jsor\Doctrine\PostGIS\Functions\ST_OrderingEquals');
        $configuration->addCustomStringFunction('ST_Overlaps', 'Jsor\Doctrine\PostGIS\Functions\ST_Overlaps');
        $configuration->addCustomNumericFunction('ST_Perimeter', 'Jsor\Doctrine\PostGIS\Functions\ST_Perimeter');
        $configuration->addCustomStringFunction('ST_PointOnSurface', 'Jsor\Doctrine\PostGIS\Functions\ST_PointOnSurface');
        $configuration->addCustomStringFunction('ST_Project', 'Jsor\Doctrine\PostGIS\Functions\ST_Project');
        $configuration->addCustomStringFunction('ST_Relate', 'Jsor\Doctrine\PostGIS\Functions\ST_Relate');
        $configuration->addCustomStringFunction('ST_ShortestLine', 'Jsor\Doctrine\PostGIS\Functions\ST_ShortestLine');
        $configuration->addCustomStringFunction('ST_Touches', 'Jsor\Doctrine\PostGIS\Functions\ST_Touches');
        $configuration->addCustomStringFunction('ST_Within', 'Jsor\Doctrine\PostGIS\Functions\ST_Within');
        $configuration->addCustomStringFunction('ST_Buffer', 'Jsor\Doctrine\PostGIS\Functions\ST_Buffer');
        $configuration->addCustomStringFunction('ST_Collect', 'Jsor\Doctrine\PostGIS\Functions\ST_Collect');
        $configuration->addCustomStringFunction('ST_Difference', 'Jsor\Doctrine\PostGIS\Functions\ST_Difference');
        $configuration->addCustomStringFunction('ST_FlipCoordinates', 'Jsor\Doctrine\PostGIS\Functions\ST_FlipCoordinates');
        $configuration->addCustomStringFunction('ST_Intersection', 'Jsor\Doctrine\PostGIS\Functions\ST_Intersection');
        $configuration->addCustomStringFunction('ST_MinimumBoundingCircle', 'Jsor\Doctrine\PostGIS\Functions\ST_MinimumBoundingCircle');
        $configuration->addCustomStringFunction('ST_Shift_Longitude', 'Jsor\Doctrine\PostGIS\Functions\ST_Shift_Longitude');
        $configuration->addCustomStringFunction('ST_Split', 'Jsor\Doctrine\PostGIS\Functions\ST_Split');
        $configuration->addCustomStringFunction('ST_SymDifference', 'Jsor\Doctrine\PostGIS\Functions\ST_SymDifference');
        $configuration->addCustomStringFunction('ST_Union', 'Jsor\Doctrine\PostGIS\Functions\ST_Union');
    }
}
