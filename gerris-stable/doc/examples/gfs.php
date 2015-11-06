<?php
/*************************************************************************************
 * gfs.php
 * --------
 * Author: Stephane Popinet (s.popinet@gmail.com)
 * Copyright: (c) 2010 Stephane Popinet (http://gfs.sf.net)
 * Release Version: 1.0.8.1
 * Date Started: 2010/07/10
 *
 * Gerris language file for GeSHi.
 *
 * Generated automatically by gerris/doc/examples/gfs.php.sh
 *
 * CHANGES
 * -------
 * 2010/07/10 (0.0.1)
 *  -  First Release
 *
 * TODO (updated 2010/07/10)
 * -------------------------
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Gerris',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array('/*' => '*/'),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '\\',
    'KEYWORDS' => array(
        1 => array(
'GfsAdapt', 
'GfsAdaptError', 
'GfsAdaptFunction', 
'GfsAdaptGradient', 
'GfsAdaptStreamlineCurvature', 
'GfsAdaptThickness', 
'GfsAdaptVorticity', 
'GfsAdvection', 
'GfsAdvectionAxi', 
'GfsAdvectionParams', 
'GfsApproxProjectionParams', 
'GfsAxi', 
'GfsBcAngle', 
'GfsBcDirichlet', 
'GfsBcE', 
'GfsBcFlather', 
'GfsBcNavier', 
'GfsBcNeumann', 
'GfsBcSubcritical', 
'GfsBcTide', 
'GfsBoundary', 
'GfsBoundaryGradient', 
'GfsBoundaryInflowConstant', 
'GfsBoundaryMpi', 
'GfsBoundaryOutflow', 
'GfsBoundaryPeriodic', 
'GfsBox', 
'GfsBubbleFraction', 
'GfsBubbleFractionDt', 
'GfsCartesianGrid', 
'GfsConstant', 
'GfsDeferredCompilation', 
'GfsDefine', 
'GfsDerivedVariable', 
'GfsDiffusion', 
'GfsDischargeElevation', 
'GfsDomain', 
'GfsDomainProjection', 
'GfsDropletToParticle', 
'GfsElectroHydro', 
'GfsElectroHydroAxi', 
'GfsEvent', 
'GfsEventBalance', 
'GfsEventFilter', 
'GfsEventHarmonic', 
'GfsEventList', 
'GfsEventScript', 
'GfsEventStop', 
'GfsEventSum', 
'GfsEventSumDirection', 
'GfsFeedParticle', 
'GfsForceBuoy', 
'GfsForceCoeff', 
'GfsForceDrag', 
'GfsForceLift', 
'GfsFunction', 
'GfsFunctionConstant', 
'GfsFunctionMap', 
'GfsFunctionSpatial', 
'GfsGEdge', 
'GfsGenericMetric', 
'GfsGenericSurface', 
'GfsGlobal', 
'GfsHydrostaticPressure', 
'GfsInit', 
'GfsInitFaceValues', 
'GfsInitFlowConstant', 
'GfsInitFraction', 
'GfsInitMask', 
'GfsInitStokesWave', 
'GfsInitVorticity', 
'GfsInitWave', 
'GfsLayered', 
'GfsLayers', 
'GfsMap', 
'GfsMapFunction', 
'GfsMapProjection', 
'GfsMapTransform', 
'GfsMetric', 
'GfsMetricCubed', 
'GfsMetricCubed1', 
'GfsMetricLaplace', 
'GfsMetricLonLat', 
'GfsMetricStretch', 
'GfsMetricVariable', 
'GfsOcean', 
'GfsOutput', 
'GfsOutputAdaptStats', 
'GfsOutputBalance', 
'GfsOutputBoundaries', 
'GfsOutputCorrelation', 
'GfsOutputDiffusionStats', 
'GfsOutputDropletSums', 
'GfsOutputErrorNorm', 
'GfsOutputGRD', 
'GfsOutputLocation', 
'GfsOutputObject', 
'GfsOutputParticle', 
'GfsOutputPotentialStats', 
'GfsOutputPovrayDF3', 
'GfsOutputPPM', 
'GfsOutputProgress', 
'GfsOutputProjectionStats', 
'GfsOutputScalar', 
'GfsOutputScalarHistogram', 
'GfsOutputScalarMaxima', 
'GfsOutputScalarNorm', 
'GfsOutputScalarStats', 
'GfsOutputScalarSum', 
'GfsOutputSimulation', 
'GfsOutputSolidForce', 
'GfsOutputSolidStats', 
'GfsOutputSpectra', 
'GfsOutputSquares', 
'GfsOutputStreamline', 
'GfsOutputTime', 
'GfsOutputTiming', 
'GfsParticle', 
'GfsParticleForce', 
'GfsParticleList', 
'GfsParticulate', 
'GfsParticulateField', 
'GfsPhysicalParams', 
'GfsPoisson', 
'GfsProjectionParams', 
'GfsRefine', 
'GfsRefineDistance', 
'GfsRefineHeight', 
'GfsRefineSolid', 
'GfsRefineSurface', 
'GfsRefineTerrain', 
'GfsRemoveDroplets', 
'GfsRemovePonds', 
'GfsRiver', 
'GfsSimulation', 
'GfsSimulationMoving', 
'GfsSkewSymmetric', 
'GfsSolid', 
'GfsSolidMoving', 
'GfsSource', 
'GfsSourceControl', 
'GfsSourceControlField', 
'GfsSourceCoriolis', 
'GfsSourceCulvert', 
'GfsSourceDiffusion', 
'GfsSourceDiffusionExplicit', 
'GfsSourceElectric', 
'GfsSourceFlux', 
'GfsSourceFriction', 
'GfsSourceGeneric', 
'GfsSourcePipe', 
'GfsSourceScalar', 
'GfsSourceTension', 
'GfsSourceTensionCSS', 
'GfsSourceVelocity', 
'GfsSourceViscosity', 
'GfsSourceViscosityExplicit', 
'GfsSpatialSum', 
'GfsStoredMetric', 
'GfsSurface', 
'GfsSurfaceBc', 
'GfsSurfaceTerrain', 
'GfsTerrain', 
'GfsTime', 
'GfsVariable', 
'GfsVariableAge', 
'GfsVariableAverage', 
'GfsVariableBoolean', 
'GfsVariableCurvature', 
'GfsVariableDiagonal', 
'GfsVariableDistance', 
'GfsVariableFiltered', 
'GfsVariableFunction', 
'GfsVariableLaplacian', 
'GfsVariableMetric', 
'GfsVariablePoisson', 
'GfsVariablePosition', 
'GfsVariableResidual', 
'GfsVariableStreamFunction', 
'GfsVariableTerrain', 
'GfsVariableTracer', 
'GfsVariableTracerVOF', 
'GfsVariableTracerVOFHeight', 
'GfsVariableVOFConcentration', 
'GfsWave'            ),
        2 => array(
'Adapt', 
'AdaptError', 
'AdaptFunction', 
'AdaptGradient', 
'AdaptStreamlineCurvature', 
'AdaptThickness', 
'AdaptVorticity', 
'Advection', 
'AdvectionAxi', 
'AdvectionParams', 
'ApproxProjectionParams', 
'Axi', 
'BcAngle', 
'BcDirichlet', 
'BcE', 
'BcFlather', 
'BcNavier', 
'BcNeumann', 
'BcSubcritical', 
'BcTide', 
'Boundary', 
'BoundaryGradient', 
'BoundaryInflowConstant', 
'BoundaryMpi', 
'BoundaryOutflow', 
'BoundaryPeriodic', 
'Box', 
'BubbleFraction', 
'BubbleFractionDt', 
'CartesianGrid', 
'Constant', 
'DeferredCompilation', 
'Define', 
'DerivedVariable', 
'Diffusion', 
'DischargeElevation', 
'Domain', 
'DomainProjection', 
'DropletToParticle', 
'ElectroHydro', 
'ElectroHydroAxi', 
'Event', 
'EventBalance', 
'EventFilter', 
'EventHarmonic', 
'EventList', 
'EventScript', 
'EventStop', 
'EventSum', 
'EventSumDirection', 
'FeedParticle', 
'ForceBuoy', 
'ForceCoeff', 
'ForceDrag', 
'ForceLift', 
'Function', 
'FunctionConstant', 
'FunctionMap', 
'FunctionSpatial', 
'GEdge', 
'GenericMetric', 
'GenericSurface', 
'Global', 
'HydrostaticPressure', 
'Init', 
'InitFaceValues', 
'InitFlowConstant', 
'InitFraction', 
'InitMask', 
'InitStokesWave', 
'InitVorticity', 
'InitWave', 
'Layered', 
'Layers', 
'Map', 
'MapFunction', 
'MapProjection', 
'MapTransform', 
'Metric', 
'MetricCubed', 
'MetricCubed1', 
'MetricLaplace', 
'MetricLonLat', 
'MetricStretch', 
'MetricVariable', 
'Ocean', 
'Output', 
'OutputAdaptStats', 
'OutputBalance', 
'OutputBoundaries', 
'OutputCorrelation', 
'OutputDiffusionStats', 
'OutputDropletSums', 
'OutputErrorNorm', 
'OutputGRD', 
'OutputLocation', 
'OutputObject', 
'OutputParticle', 
'OutputPotentialStats', 
'OutputPovrayDF3', 
'OutputPPM', 
'OutputProgress', 
'OutputProjectionStats', 
'OutputScalar', 
'OutputScalarHistogram', 
'OutputScalarMaxima', 
'OutputScalarNorm', 
'OutputScalarStats', 
'OutputScalarSum', 
'OutputSimulation', 
'OutputSolidForce', 
'OutputSolidStats', 
'OutputSpectra', 
'OutputSquares', 
'OutputStreamline', 
'OutputTime', 
'OutputTiming', 
'Particle', 
'ParticleForce', 
'ParticleList', 
'Particulate', 
'ParticulateField', 
'PhysicalParams', 
'Poisson', 
'ProjectionParams', 
'Refine', 
'RefineDistance', 
'RefineHeight', 
'RefineSolid', 
'RefineSurface', 
'RefineTerrain', 
'RemoveDroplets', 
'RemovePonds', 
'River', 
'Simulation', 
'SimulationMoving', 
'SkewSymmetric', 
'Solid', 
'SolidMoving', 
'Source', 
'SourceControl', 
'SourceControlField', 
'SourceCoriolis', 
'SourceCulvert', 
'SourceDiffusion', 
'SourceDiffusionExplicit', 
'SourceElectric', 
'SourceFlux', 
'SourceFriction', 
'SourceGeneric', 
'SourcePipe', 
'SourceScalar', 
'SourceTension', 
'SourceTensionCSS', 
'SourceVelocity', 
'SourceViscosity', 
'SourceViscosityExplicit', 
'SpatialSum', 
'StoredMetric', 
'Surface', 
'SurfaceBc', 
'SurfaceTerrain', 
'Terrain', 
'Time', 
'Variable', 
'VariableAge', 
'VariableAverage', 
'VariableBoolean', 
'VariableCurvature', 
'VariableDiagonal', 
'VariableDistance', 
'VariableFiltered', 
'VariableFunction', 
'VariableLaplacian', 
'VariableMetric', 
'VariablePoisson', 
'VariablePosition', 
'VariableResidual', 
'VariableStreamFunction', 
'VariableTerrain', 
'VariableTracer', 
'VariableTracerVOF', 
'VariableTracerVOFHeight', 
'VariableVOFConcentration', 
'Wave'            ),
        3 => array(
'bubbles', 
'culvert', 
'df3', 
'electrohydro', 
'fft', 
'layered', 
'map', 
'ode', 
'okada', 
'particulates', 
'skewsymmetric', 
'stokes', 
'terrain', 
'tide', 
'topics'            )
        ),
    'SYMBOLS' => array(
	    '(', ')', '{', '}', '[', ']', '=', '+', '-', '*', '/', '!', '%', '^', '&', ':'
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => true,
        1 => true,
        2 => true,
        3 => true
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color: #002bb8;',
            2 => 'color: #002bb8;',
            3 => 'color: #b1b100; font-weight: bold;'
            ),
        'COMMENTS' => array(
            1 => 'color: #808080; font-style: italic;',
            2 => 'color: #808080; font-style: italic;',
            'MULTI' => 'color: #808080; font-style: italic;'
            ),
        'ESCAPE_CHAR' => array(
            0 => 'color: #000099; font-weight: bold;'
            ),
        'BRACKETS' => array(
            0 => 'color: #66cc66;'
            ),
        'STRINGS' => array(
            0 => 'color: #ff0000;'
            ),
        'NUMBERS' => array(
            0 => 'color: #cc66cc;'
            ),
        'METHODS' => array(
            1 => 'color: #006600;',
            2 => 'color: #006600;'
            ),
        'SYMBOLS' => array(
            0 => 'color: #66cc66;'
            ),
        'REGEXPS' => array(
            0 => 'color: #0000ff;',
            1 => 'color: #ff0000'
            ),
        'SCRIPT' => array(
            0 => '',
            1 => '',
            2 => '',
            3 => ''
            )
        ),
    'URLS' => array(
        1 => 'http://gfs.sf.net/wiki/index.php/{FNAME}',
        2 => 'http://gfs.sf.net/wiki/index.php/Gfs{FNAME}',
        3 => 'http://gfs.sourceforge.net/wiki/index.php/Object_hierarchy#{FNAME}'
        ),
    'OOLANG' => false,
    'TAB_WIDTH' => 4
);

?>
