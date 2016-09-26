package org.eclipse.wtp.sample.classschedule;

import java.util.ArrayList;

import com.sun.xml.internal.bind.v2.schemagen.xmlschema.List;

public class SchoolSchedule {

	private ArrayList classes = new ArrayList();

	public ArrayList getClasses() {
		return classes;
	}
	public void addClass(SchoolClass schoolClass)
	{
	classes.add(schoolClass);
	}
}
