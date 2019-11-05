SELECT    sr.[ServiceId] AS [Id]
			  ,sr.[ServiceName] AS [Name]
			  ,sr.[ServiceCd] AS [Code]
			  ,sr.[MultipleSubstance] as[IsMultipleSubstance]
			  ,sr.[SpecificAgeYN] AS [IsAgeSpecific]
			  ,sr.SysServiceTypeId AS [Type]
			  ,sr.ActiveYn as [Active]
			  ,sr.WorkingDays
			  ,vatc.[VATTypeCd] AS [VATCode]
			  ,vatc.[Value] AS [VATValue]
			  ,taxc.[TAXTypeCd] AS [TAXCode]
			  ,taxc.[Value] AS [TAXValue]
			  ,sb.[SubstanceId]
			  ,sb.[SubstanceName]
			  ,tb.[TubeId]     
			  ,tb.[TubeName]
			  ,tb.[AddNoToBarcodeIFT25] AS [TubeBarcodeNumber]
			  ,tb.[AdditionalLabels]
			  ,pq.PatientQuestionId AS [Id]
			  ,pq.PatientQuestionCd AS [Code]
			  ,pq.PatientQuestionDescription AS [Description]

			  ,ss.[ServiceId] AS [Id]
			  ,ss.[ServiceName] AS [Name]
			  ,ss.[ServiceCd] AS [Code]
			  ,ss.[MultipleSubstance] as[IsMultipleSubstance]
			  ,ss.[SpecificAgeYN] AS [IsAgeSpecific] 
			  ,ss.SysServiceTypeId AS [Type]
			  ,ss.WorkingDays
			  ,vatc.[VATTypeCd] AS [VATCode]
			  ,vatc.[Value] AS [VATValue]
			  ,taxc.[TAXTypeCd] AS [TAXCode]
			  ,taxc.[Value] AS [TAXValue]
			  ,sxsb.[SubstanceId]
			  ,sxsb.[SubstanceName]
			  ,sxtb.[TubeId]
			  ,sxtb.[TubeName]
			  ,sxtb.[AddNoToBarcodeIFT25] AS [TubeBarcodeNumber]
			  ,sxtb.[AdditionalLabels]
			  ,sspq.PatientQuestionId AS [Id]
			  ,sspq.PatientQuestionCd AS [Code]
			  ,sspq.PatientQuestionDescription AS [Description]
     
	  FROM [dbo].[Service] sr  WITH (NOLOCK)
	  LEFT JOIN [dbo].[VATType] vatp WITH (NOLOCK) on sr.VATTypeId = vatp.VATTypeId   
	  LEFT JOIN [dbo].[TAXType] taxp WITH (NOLOCK) on sr.TAXTypeId = taxp.TAXTypeId 
	  LEFT JOIN [dbo].[Tube] tb WITH (NOLOCK) on tb.TubeId = sr.TubeId
	  INNER JOIN [dbo].[Substance] sb WITH (NOLOCK) on sb.SubstanceId = sr.SubstanceId
	  LEFT JOIN [dbo].[ServiceXPatientQuestion] sxp WITH (NOLOCK) on sr.ServiceId = sxp.ServiceId
	  LEFT JOIN [dbo].[PatientQuestion] pq WITH (NOLOCK) on pq.PatientQuestionId = sxp.PatientQuestionId
	  LEFT JOIN [dbo].[ServiceXService] sxs WITH (NOLOCK) on sr.ServiceId = sxs.BasicServiceId
	  LEFT JOIN [dbo].[Service] ss WITH (NOLOCK) on sxs.ServiceId = ss.ServiceId   
	  LEFT JOIN [dbo].[VATType] vatc WITH (NOLOCK) on ss.VATTypeId = vatc.VATTypeId   
	  LEFT JOIN [dbo].[TAXType] taxc WITH (NOLOCK) on ss.TAXTypeId = taxc.TAXTypeId   
	  LEFT JOIN [dbo].[Tube] sxtb WITH (NOLOCK) on sxtb.TubeId = ss.TubeId
	  LEFT JOIN [dbo].[Substance] sxsb WITH (NOLOCK) on sxsb.SubstanceId = ss.SubstanceId
	  LEFT JOIN [dbo].ServiceXPatientQuestion sssxp WITH (NOLOCK) on ss.ServiceId = sssxp.ServiceId
	  LEFT JOIN [dbo].PatientQuestion sspq WITH (NOLOCK) on sspq.PatientQuestionId = sssxp.PatientQuestionId
